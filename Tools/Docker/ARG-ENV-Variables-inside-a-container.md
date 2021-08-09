# ARG-ENV-Variables-inside-a-container

## [Arg vs environment](https://vsupalov.com/docker-arg-vs-env/)
* https://vsupalov.com/docker-arg-env-variable-guide/

### ARG

ARG values are not available after the image is built. 
When building a Docker image from the commandline, you can set ARG values using –build-arg. 

```yaml
args:
        ARG_1: $ARG_1
        ARG_2: $ARG_2
```

```yaml
ARG ARG_1
ARG ARG_2=false
```

```shell
docker-compose -f docker-compose.yml build --build-arg ARG_1=true --build-arg ARG_2=false
```

### ENV

While ENV variables are passed via `.env`, `.env.dev`, `.env.staging`.

```yaml
environment:
            POSTGRES_USER: user1
```

```yaml
ENV POSTGRES_USER=$POSTGRES_USER
```

## Inside the container

```shell
echo $POSTGRES_USER
```
> user1
