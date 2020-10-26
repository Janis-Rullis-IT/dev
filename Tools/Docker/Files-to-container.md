# Files to container

## Interactive / symlink

`docker-compose.yml` volumes!

```yaml
services:
  my-nw:
    volumes:
      - /PATH/TO/MY/PROJECT:/var/www/:rw
```

## Fixed

[ADD or COPY.](COPY-vs-ADD.md) 
