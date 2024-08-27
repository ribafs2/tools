#include <gtest/gtest.h>

#include "common/sanitizer.h"

#include "runtime/allocator.h"

TEST(allocator_malloc_replacement_test, test_replace_and_check) {
  ASSERT_FALSE(dl::is_malloc_replaced());
  dl::replace_malloc_with_script_allocator();
  ASSERT_TRUE(dl::is_malloc_replaced());
  dl::rollback_malloc_replacement();
  ASSERT_FALSE(dl::is_malloc_replaced());
}

TEST(allocator_malloc_replacement_test, test_replacement_raii) {
  ASSERT_FALSE(dl::is_malloc_replaced());

  {
    auto guard = make_malloc_replacement_with_script_allocator();
    ASSERT_TRUE(dl::is_malloc_replaced());
  }

  ASSERT_FALSE(dl::is_malloc_replaced());

  {
    auto guard = make_malloc_replacement_with_script_allocator(false);
    ASSERT_FALSE(dl::is_malloc_replaced());
  }

  ASSERT_FALSE(dl::is_malloc_replaced());
}

void *alloc_no_inline(int x);

TEST(allocator_malloc_replacement_test, test_replace_and_alloc) {
  ASSERT_FALSE(dl::is_malloc_replaced());

  const auto memory_stats_before = dl::get_script_memory_stats();
  {
    auto guard = make_malloc_replacement_with_script_allocator();
    ASSERT_TRUE(dl::is_malloc_replaced());
    void *mem = alloc_no_inline(128);
    ASSERT_TRUE(mem);
#if !ASAN_ENABLED and !defined(__APPLE__)
    // asan replaces malloc and hooks doens't work, on macos hooks doesn't work at all
    ASSERT_EQ(memory_stats_before.memory_used + 128 + 8, dl::get_script_memory_stats().memory_used);
#endif
    std::free(mem);
    ASSERT_EQ(memory_stats_before.memory_used, dl::get_script_memory_stats().memory_used);
  }

  ASSERT_FALSE(dl::is_malloc_replaced());
  ASSERT_EQ(memory_stats_before.memory_used, dl::get_script_memory_stats().memory_used);

  void *mem = std::malloc(128);
  ASSERT_TRUE(mem);
  ASSERT_EQ(memory_stats_before.memory_used, dl::get_script_memory_stats().memory_used);
  std::free(mem);
}
