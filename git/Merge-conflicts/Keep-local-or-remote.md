# [Keep local or remote when conflict](https://stackoverflow.com/a/12025832)

## Keep remote

```shell
git checkout --theirs /path/to/file
```


## Keep local

```shell
git checkout --ours /path/to/file
```

Then git add them and everything is done.
