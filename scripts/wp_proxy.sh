#!/usr/bin/env bash

source `dirname $0`/settings

proxy_file="`dirname $0`/../$WP_PATH/.wp-proxy"
if [ -f "$proxy_file" ]
then
  echo "Removing proxy file"
  rm `dirname $0`/../$WP_PATH/.wp-proxy
else
  echo "Adding proxy file"
  touch `dirname $0`/../$WP_PATH/.wp-proxy
fi