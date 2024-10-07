## [Branches](https://github.com/Kunena/Kunena-Forum/wiki/Create-a-new-branch-with-git-and-manage-branches)
* https://dev.to/hardkoded/how-to-organize-your-git-branches-4dci

## [Rename](https://careerkarma.com/blog/git-rename-branch/)

```shell
git branch -m old new
```

## Create and switch

> `git switch` can now be used to change branches. Kudos to Matko Hering.

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

## Still see branches when doing `git checkout` auto-suggest?
* https://www.geeksforgeeks.org/difference-between-git-remote-prune-git-prune-and-git-fetch-prune/
* https://stackoverflow.com/questions/1072171/how-do-you-remove-an-invalid-remote-branch-reference-from-git#comment10276471_1072178
> git is verifying which remote branches are done.
```shell
git remote prune origin
```
```
Pruning origin
URL: git@gitlab.example.io:dev/my-repo.git
 * [pruned] origin/feature/friendly-branch
```

## Naming
* feature/662-login-with-facebook
* bugfix/127-homepage-404
