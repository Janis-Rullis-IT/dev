# [Memcached](https://www.journaldev.com/16/memcached-telnet-commands-example)

## Connect

```shell
ps -eaf | grep memcached
telnet localhost 11211
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
