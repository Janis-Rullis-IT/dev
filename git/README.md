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
```

## Change repo's URL and keep the commit history
Update `url` in `.git/config`.


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