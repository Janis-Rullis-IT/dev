
# [Share Your host's MariaDB with containers](https://www.baeldung.com/linux/docker-connecting-containers-to-host)
* https://www.baeldung.com/linux/docker-connecting-containers-to-host   

In MariaDB's conf set 

```
bind-address = 172.17.0.1
```
> Hosts bridge IP: 172.17.0.1

### And then we can access from containes the MariaDB

```shell
mariadb -h 172.17.0.1
```
