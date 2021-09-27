# [Memcached](https://www.journaldev.com/16/memcached-telnet-commands-example)

## Connect

```shell
ps -eaf | grep memcached
telnet localhost 11211
```

## Get

```shell
set KEY_NAME FLAG_INT_FOR_FUN SECONDS_INT BYTES_OF_THE_CONTENT
```

```
telnet localhost 11211
Trying 127.0.0.1...
Connected to localhost.
Escape character is '^]'.
set tutorialspoint 0 10 9
memcached
STORED
get tutorialspoint
VALUE tutorialspoint 0 9
memcached
END
get tutorialspoint
VALUE tutorialspoint 0 9
memcached
END
get tutorialspoint
END
```

## Stats

```shell
stats
stats items
stats slabs
```

## Clear

```shell
flush_all
```
> OK

## Exit

```shell
quit
```

## Setup

```shell
apt-get install telnet
```
