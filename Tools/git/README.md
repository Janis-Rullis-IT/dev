# git

* https://about.gitlab.com/2018/08/08/git-happens/

## [Why github is asking username if i have a ssh?](https://stackoverflow.com/a/46337804)

You need to tell Git to use SSH protocol instead of HTTPS. On the repository page on GitHub, select Clone or Download and Use SSH. You will get a URL for the SSH protocol in the form git@github.com:<user>/<repo>.git.

Then run the following command in your working tree to tell Git to use this URL instead of the current one:

`git remote set-url origin git@github.com:<user>/<repo>.git`


## [Git ignore](Git-ignore)

## [Git: revert (reset) a single file](https://www.norbauer.com/rails-consulting/notes/git-revert-reset-a-single-file)

```bash
git checkout filename
```

## Display local repo's and global configuration values 

```bash
git config -l
```

## Configure git
* [https://help.github.com/articles/set-up-git/](https://help.github.com/articles/set-up-git/)

```bash
git config --global user.name "John Doe"
git config --global user.email "john.doe@example.com"
git config --global push.default simple
git config --global diff.tool meld
git config --global difftool.prompt false
git config --global merge.tool meld
git config --global mergetool.prompt false
```

## Change repo's URL and keep the commit history
Update `url` in `.git/config`.

## [Branches](https://github.com/Kunena/Kunena-Forum/wiki/Create-a-new-branch-with-git-and-manage-branches)
* https://dev.to/hardkoded/how-to-organize-your-git-branches-4dci

### Create and switch

```shell
git checkout -b bugfix/127-homepage-404
```

### Push to remote

```shell
git push -u origin bugfix/127-homepage-404
```

### Switch

```shell
git checkout bugfix/127-homepage-404
```

### List

```shell
git branch
```

### Delete

#### Remote

```shell
git push -u origin --delete 1-setup-env
```

#### Local

```shell
git branch -d bugfix/127-homepage-404
```

### Naming
* feature/662-login-with-facebook
* bugfix/127-homepage-404


## [Fix `Permission denied (publickey).` when cloning from the github](Setup-git-ssh-key.md)

## Can I?

### Push from not root directory?

#### Better NOT. It will not push changes from above.

Current directory: /dev/Code-editor/Netbeans

```shell
	modified:   Setup-and-config-netbeans.md
	modified:   ../../git/README.md
```
After push

```shell
modified:   ../../git/README.md
```

## Hosting options

* [Gitea](https://try.gitea.io/)
