# Net-bridge-container-to-host.md

* [bridge - by default.](https://docs.docker.com/network/bridge/)
By default, Docker will create a bridge network. This default network doesn’t allow the containers to connect to the host

## In docker-compose.yml

As the host address may change on every request and container then OS + docker has come together to help as
and create this magical address `host.docker.internal`.

> See this used in practice [Xdebug 3 + Docker](https://github.com/Janis-Rullis-IT/dev/tree/49edba94798ffdb29fb3870ce3dfdc23e74fd8cf/Tools/XDebug3-Docker).

```yml
extra_hosts:
      - "host.docker.internal:host-gateway"
```

And then `host.docker.internal` is the host address.


# [Get Host's IP / brige connection IP](https://www.baeldung.com/linux/docker-connecting-containers-to-host)

On the host

```shell
ifconfig
```

```
docker0   Link encap:Ethernet  HWaddr 02:42:A7:6A:EC:A9  
          inet addr:172.17.0.1  Bcast:172.17.255.255  Mask:255.255.0.0
```
> Host IP for the bridge connection: 172.17.0.1.

## Check specific container network's host address

```shell
docker network ls
docker network inspect blabla-network
```
> Host's bridge IP for this network is `IPAM.Config.Gateway` -> 172.18.0.1

## Ooor

```shell
docker inspect blabla-container
```
> "Gateway": "172.19.0.1","IPAddress": "172.19.0.6".

## Check that the container can ping the host

```shell
docker exec -it pam-api bash
curl 172.19.0.1
curl 172.19.0.123
```
> curl: (7) Failed to connect to 172.19.0.1 port 80: Connection refused
> curl: (7) Failed to connect to 172.19.0.123 port 80: No route to host

### Yes, can.
