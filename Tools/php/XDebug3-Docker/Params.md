# Xdebug 3 params

## `xdebug.discover_client_host=0`
If true then it tries to extract the client/IDE's IP from the request's headers. May not work. Better to define using `xdebug.client_host=host.docker.internal`.

## `xdebug.start_with_request=yes`
Boots-up without waiting the magical start-session call that IDE's make.

## `xdebug.mode=debug,develop`
Control the purpose for the xdebug. Enabled ones can be seen via `php -i`. 

## `xdebug.idekey="netbeans-xdebug"`
Previously was used in v2. In v3 I guess it's possible to use too. My assumption that this is necessary if there are multiple IDE's
so they could work in separate sessions.

## `xdebug.client_port=9003`

Def is 9003 but can be changed in case if there are 1 host IDE and multiple PHP containers that have Xdebug's in them.
