#!/bin/sh

set -e
service cron start
mix deps.get
mix phx.server