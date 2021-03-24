# [Reset-messed-up-local-branch.md](https://stackoverflow.com/a/9210786)

```shell
git branch -d local_branch
git fetch origin remote_branch
git checkout -b local_branch origin/remote_branch
```
