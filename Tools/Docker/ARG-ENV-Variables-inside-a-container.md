# ARG-ENV-Variables-inside-a-container

## [Arg vs environment](https://vsupalov.com/docker-arg-vs-env/)
* https://vsupalov.com/docker-arg-env-variable-guide/
* https://stackoverflow.com/questions/41916386/arg-or-env-which-one-to-use-in-this-case

```
The ARG instruction defines a variable that users can pass at build-time to the builder with the docker build command using the --build-arg <varname>=<value> flag.

The ENV instruction sets the environment variable <key> to the value <value>.
The environment variables set using ENV will persist when a container is run from the resulting image.
```

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
