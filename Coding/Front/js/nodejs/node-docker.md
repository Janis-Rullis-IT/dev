# node-docker.md

```shell
./node.sh
./node.sh "npm run build"
```

```shell
CMD='npx vue-cli-service build --watch --skip-plugins eslint'

if [[ $1 ]]; then
    CMD=$1
fi

docker run \
        -e NODE_ENV=local \
        -u node \
        --rm -t \        
        -v /home/j/Desktop/your-vue-repo:/vue \
        --workdir=/vue \
    node:14.9.0 \
        bash -c "${CMD}"
```
