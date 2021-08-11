# Net-bridge-container-to-host.md

* [bridge - by default.](https://docs.docker.com/network/bridge/)
By default, Docker will create a bridge network. This default network doesn’t allow the containers to connect to the host

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
