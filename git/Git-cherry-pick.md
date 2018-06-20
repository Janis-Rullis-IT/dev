# Git cherry-pick

* [Intro to Cherry Picking with Git (previousnext.com.au)](https://www.previousnext.com.au/blog/intro-cherry-picking-git)

## Steps

## Collect the hash for the commit (cherry) You wish to pick

> You can cherry-pick multiple commits.

* Switch to the branch where the commit lives.
* Use `git log` or `gitk` to collect the hash

## Switch to the target branch

in which You want to merge the commit.

```shell
git checkout master
```

## Pick that cherry!

```shell
git cherry-pick HASH_1 HASH_2 HASH_3
```

## Check the code

* Read affected files.
* Open the project and see the code in a process.