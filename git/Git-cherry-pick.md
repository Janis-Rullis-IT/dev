# Git cherry-pick

* [Intro to Cherry Picking with Git (previousnext.com.au)](https://www.previousnext.com.au/blog/intro-cherry-picking-git)

## Does it take only the commit part or the file from that specific moment?

* The file from that specific moment.

## Steps

### Precaution

In my opinion cherry-pick is still quite risky (just like a regular merge), because it can really mess up the code in the merging process. So to lessen any future struggle, I would:
* A - duplicate the target branch and work on that, and repeat the merge only when the process was successful on the duplicate.
* B - copy the project.

### Collect the hash for the commit (cherry) You wish to pick

> You can cherry-pick multiple commits.

* Switch to the branch where the commit lives.
* Use `git log` or `gitk` to collect the hash

### Switch to the target branch

in which You want to merge the commit.

```shell
git checkout master
```

### Pick that cherry!

```shell
git cherry-pick HASH_1 HASH_2 HASH_3
```

### Solve merge conflicts

No conflicts, You say? Lucky You! Otherwise ...

#### Open the merge tool

```shell
git mergetool
```

#### Compose the file by selecting what to pick from the current and the cherry brach

![meld](http://meldmerge.org/images/meld-filediff-full.png)

#### Continue

```shell
git cherry-pick --continue
```

##### or abort

```shell
git cherry-pick --abort
```

### Check the code

* Read affected files.
* Open the project and see the code in a process.


## Cherry-pick a merge

```shell
git cherry-pick -m 1 <hash>
```