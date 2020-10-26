# Docker networks

## [Define containers IP](https://blog.alejandrocelaya.com/2017/04/21/set-specific-ip-addresses-to-docker-containers-created-with-docker-compose/)

```Dockerfile
version: '3'

services:
    test_1:
        container_name: test_1
        image: some:image
        networks:
            testing_net:
                ipv4_address: 172.28.1.1

    test_2:
        container_name: test_2
        image: some:image
        networks:
            testing_net:
                ipv4_address: 172.28.1.2

    test_3:
        container_name: test_3
        image: some:image
        networks:
            testing_net:
                ipv4_address: 172.28.1.3

networks:
    testing_net:
        ipam:
            driver: default
            config:
                - subnet: 172.28.0.0/16
```

## List

```ex
docker network ls
```

## Show info

```ex
docker network inspect elixir_elixir-net
```

```json
[
    {
        "Name": "elixir_elixir-net",
        "Id": "142a15050b7198239802bbbadbe6915e3907801785c360702ddb8ffc9aa65da6",
        "Created": "2018-06-16T06:42:01.745130364+03:00",
        "Scope": "local",
        "Driver": "bridge",
        "EnableIPv6": false,
        "IPAM": {
            "Driver": "default",
            "Options": null,
            "Config": [
                {
                    "Subnet": "172.60.0.0/16"
                }
            ]
        },
        "Internal": false,
        "Attachable": true,
        "Ingress": false,
        "ConfigFrom": {
            "Network": ""
        },
        "ConfigOnly": false,
        "Containers": {
            "27145895c761b471316d4bbe05140886c424b755c5df4282100f4c457379c747": {
                "Name": "elixir-frontend",
                "EndpointID": "22b3300b218777b566cf520dcb0ff27f14c38b4fb5e6535e958564b12516557f",
                "MacAddress": "02:42:ac:3c:01:0a",
                "IPv4Address": "172.60.1.10/16",
                "IPv6Address": ""
            },
            "43c5cea99c144975e30db03dbb04ef85691c3cb6caa779d680006b8c7036c8b8": {
                "Name": "elixir-backend",
                "EndpointID": "1af4f6f62c654fc53011277b38a85f6eeb775f5399ee1a161520b94d288f36f3",
                "MacAddress": "02:42:ac:3c:01:0b",
                "IPv4Address": "172.60.1.11/16",
                "IPv6Address": ""
            },
            "a532b413334591a004b6473b0891d7a2c830c2676c39570982c57c3e96752bd7": {
                "Name": "elixir-mysql",
                "EndpointID": "f13baa4999da8b33dd6ec7834bcf59ad1e0e0234f32cbf494c31246d92cf045f",
                "MacAddress": "02:42:ac:3c:01:0c",
                "IPv4Address": "172.60.1.12/16",
                "IPv6Address": ""
            }
        },
        "Options": {},
        "Labels": {
            "com.docker.compose.network": "elixir-net",
            "com.docker.compose.project": "elixir"
        }
    }
]
```

### Check

```shell
ping 172.60.1.10
```
> 64 bytes from 172.60.1.10: icmp_seq=1 ttl=64 time=0.149 ms    

## Remove

### One

```ex
docker network rm HASH
```

### All

```ex
docker network prune
```

### [Fix 'docker-compose up fails if network attached to container is removed'](https://github.com/docker/compose/issues/5745#issuecomment-370031631)

```shell
docker-compose --force-recreate
```