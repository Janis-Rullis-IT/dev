# Variables-inside-a-container

```yaml
environment:
            POSTGRES_USER: user1
```

## Inside the container

```shell
echo $POSTGRES_USER
```
> user1
