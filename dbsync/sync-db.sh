#!/bin/bash
set -e

echo "[INFO] Starting DB sync: $(date)"

mysqldump \
  -h "$DO_HOST" \
  -P "$DO_PORT" \
  -u "$DO_USER" \
  -p"$DO_PASS" \
  --single-transaction \
  --skip-lock-tables \
  "$DO_DB" | \
mysql -h "$LOCAL_HOST" -u "$LOCAL_USER" -p"$LOCAL_PASS" "$LOCAL_DB"

echo "[INFO] DB sync completed: $(date)"