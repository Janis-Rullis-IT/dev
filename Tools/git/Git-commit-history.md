# Git commit history

* https://www.davidchudzicki.com/posts/first-parent/
`git log --first-parent`

## In VSCode or Netbeans

https://github.com/Janis-Rullis-IT/dev/blob/0c1a07677196c8e052cd36c9ef844a445fd1bddc/Tools/Code-editor/VSCode/Git-changes-compare-working-file.md

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
