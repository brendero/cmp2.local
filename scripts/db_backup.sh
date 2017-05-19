#!/usr/bin/env bash

source `dirname $0`/settings
mkdir -p ${DB_DUMP}
#/MYSQL_PWD=${DB_PASS} mysqldump --user=${DB_USER} --databases ${DB_NAME} > ${DB_DUMP}/latest.sql
MYSQL_PWD=secret mysqldump --user=homestead --databases ${DB_NAME} > ${DB_DUMP}/latest.sql
#/gzip -cr ${DB_DUMP}/latest.sql > ${DB_DUMP}/$(date +"%Y-%m-%d_%H%M%S").sql.gz
echo "Backup for database \`${DB_NAME}\` \`${DB_DUMP}/$(date +"%Y-%m-%d_%H%M%S").sql.gz\` stored!"