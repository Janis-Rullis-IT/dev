# Git commit history

## Group by author 
git shortlog

## Find user's commits

```shell
git log --author=Jon
```

## Show full details of a commit

```shell
git show 40840b30487eb6ad56ba11795ac2fff6f1af5cdf
```

## With files

```shell
git log --author=Jon --name-status
```

## Revert to a specific commit

```shell
git checkout COMMIT_HASH
```

### Revert back to the latest

```shell
git checkout BRANCH_NAME
```
> git checkout master
