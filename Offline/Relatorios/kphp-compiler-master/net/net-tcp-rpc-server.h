// Compiler for PHP (aka KPHP)
// Copyright (c) 2020 LLC «V Kontakte»
// Distributed under the GPL v3 License, see LICENSE.notice.txt

#ifndef __NET_TCP_RPC_SERVER_H__
#define __NET_TCP_RPC_SERVER_H__

#include <sys/cdefs.h>

#include "net/net-connections.h"
#include "net/net-tcp-rpc-common.h"

struct tcp_rpc_server_functions {
  void *info;
  int (*execute)(struct connection *c, int op, struct raw_message *raw);/* invoked from parse_execute() */
  int (*check_ready)(struct connection *c);		/* invoked from rpc_client_check_ready() */
  int (*flush_packet)(struct connection *c);		/* execute this to push response to client */
  int (*rpc_check_perm)(struct connection *c);	/* 1 = allow unencrypted, 2 = allow encrypted */
  int (*rpc_init_crypto)(struct connection *c, struct tcp_rpc_nonce_packet *P);  /* 1 = ok; -1 = no crypto */
  void *nop;
  int (*rpc_wakeup)(struct connection *c);
  int (*rpc_alarm)(struct connection *c);
  int (*rpc_ready)(struct connection *c);
  int (*rpc_close)(struct connection *c, int who);
  int max_packet_len, mode_flags;
  void *memcache_fallback_type, *memcache_fallback_extra;
  void *http_fallback_type, *http_fallback_extra;
};

extern conn_type_t ct_tcp_rpc_server;
extern struct tcp_rpc_server_functions default_tcp_rpc_server;

int tcp_rpcs_wakeup (struct connection *c);
int tcp_rpcs_parse_execute (struct connection *c);
int tcp_rpcs_alarm (struct connection *c);
int tcp_rpcs_do_wakeup (struct connection *c);
int tcp_rpcs_init_accepted (struct connection *c);
int tcp_rpcs_close_connection (struct connection *c, int who);
int tcp_rpcs_flush (struct connection *c);
int tcp_rpcs_init_accepted_nohs (struct connection *c);
int tcp_rpcs_flush_packet (struct connection *c);
int tcp_rpcs_default_check_perm (struct connection *c);
int tcp_rpcs_default_check_perm_crypted (struct connection *c);
int tcp_rpcs_default_check_perm_crypted_localhost(struct connection *c);
int tcp_rpcs_init_crypto (struct connection *c, struct tcp_rpc_nonce_packet *P);

#define	TCP_RPCS_FUNC(c)	((struct tcp_rpc_server_functions *) ((c)->extra))

#endif
