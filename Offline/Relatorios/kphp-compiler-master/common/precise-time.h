// Compiler for PHP (aka KPHP)
// Copyright (c) 2020 LLC «V Kontakte»
// Distributed under the GPL v3 License, see LICENSE.notice.txt

#ifndef __PRECISE_TIME_H__
#define __PRECISE_TIME_H__

#include <stdint.h>
#include <time.h>

/* net-event.h */
extern int now;
extern thread_local double precise_now;
double get_utime_monotonic ();

/* common/server-functions.h */
extern long long precise_time;  // (long long) (2^16 * precise unixtime)
extern long long precise_time_rdtsc; // when precise_time was obtained
long long get_precise_time (unsigned precision);

/* ??? */
double get_double_time ();

double get_network_time();

int get_uptime();
void init_uptime();

#endif
