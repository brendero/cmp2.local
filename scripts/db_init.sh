#!/usr/bin/env bash
source `dirname $0`/settings
MYSQL_PWD=secret mysql --user=homestead --execute="CREATE DATABASE IF NOT EXISTS ${DB_NAME} CHARACTER SET utf8 COLLATE utf8_general_ci"
MYSQL_PWD=secret mysql --user=homestead --execute="GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}' IDENTIFIED BY '${DB_PASS}'"
echo "Database \`${DB_NAME}\` initalized!"