## [Branches](https://github.com/Kunena/Kunena-Forum/wiki/Create-a-new-branch-with-git-and-manage-branches)
* https://dev.to/hardkoded/how-to-organize-your-git-branches-4dci

## [Rename](https://careerkarma.com/blog/git-rename-branch/)

```shell
git branch -m old new
```

## Create and switch

> `git switch` can now be used to change branches.

```shell
git checkout -b bugfix/127-homepage-404
```

## Push to remote

```shell
git push -u origin bugfix/127-homepage-404
```

## Switch

```shell
git checkout bugfix/127-homepage-404
```

## List

```shell
git branch
git branch -r --merged staging
git branch -r --no-merged staging
```
> -r remote, -a local and rmeote

## Delete

### Remote

```shell
git push -u origin --delete 1-setup-env
```

### Local

```shell
git branch -d bugfix/127-homepage-404
```

## Naming
* feature/662-login-with-facebook
* bugfix/127-homepage-404
