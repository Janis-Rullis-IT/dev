# Remove-container-with-volume

```shell
docker up nginx-proxy
docker ps
docker rm -v 3d839fe7e2d8
docker up nginx-proxy
```

## [Total destruction](https://github.com/moby/moby/issues/23371#issuecomment-224927009)

```shell
docker rm -f $(docker ps -a -q)
docker rmi -f $(docker images -a -q)
docker volume rm $(docker volume ls -q)
docker network rm $(docker network ls | tail -n+2 | awk '{if($2 !~ /bridge|none|host/){ print $1 }}')
```
