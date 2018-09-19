# Merge conflicts

## Related articles

* [karenyyng/Git_mergetool_tutorial.md](https://gist.github.com/karenyyng/f19ff75c60f18b4b8149)


## After merging

```shell
git merge development
```

## Appears this error about a conflict

```
You have unmerged paths.
  (fix conflicts and run "git commit")

Unmerged paths:
  (use "git add <file>..." to mark resolution)

	both modified:   package-lock.json
```

## Solution

### Config the tool

```shell
git config --global diff.tool meld
git config --global difftool.prompt false
git config --global merge.tool meld
git config --global mergetool.prompt false
```

### Open the tool

```shell
git mergetool
```

A window with 3 sections appears:

* Left - current branch changes
* Middle - target.
* Right - branch from.

### Goal

Put all required changes from left and right into the middle.

### Steps

* Move to changes by clicking down on the arrow at the top.
* Choose left or right change by clicking on arrow.
* When done - save and close.