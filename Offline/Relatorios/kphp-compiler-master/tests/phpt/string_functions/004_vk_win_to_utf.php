@ok
<?php

require_once 'kphp_tester_include.php';

function test_utf_to_win_to_utf(string $utf_str) {
    $win_str = (string)vk_utf8_to_win($utf_str);
    $result = vk_win_to_utf8($win_str);
    assert_str_eq3($result, $utf_str);
}

// corner cases
test_utf_to_win_to_utf("");    // 129
test_utf_to_win_to_utf("ࠀ󠁴󠁿");    // 0x800
test_utf_to_win_to_utf("𐀀󠁴󠁿");    // 0x10000

// emoji
test_utf_to_win_to_utf("🏴󠁧󠁢󠁳󠁣󠁴󠁿");
test_utf_to_win_to_utf("💩");
