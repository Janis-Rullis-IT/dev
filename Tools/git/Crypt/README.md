# `git-crypt`

* https://github.com/jupyterhub/mybinder.org-deploy/commit/941a1113414e2d75b0066ca2775d7156b2131a5d

```shell
sudo apt-get install -y git-crypt
git-crypt init
git-crypt export-key my-magical-key
echo "**/secrets/** filter=git-crypt diff=git-crypt" > .gitattributes
git add .
git commit -m "init"
mkdir secrets
echo "hello" > secrets/hello.md
git-crypt status 
git-crypt status -f
# git-crypt lock -- to see how it will look
git commit -m "init"
mkdir secrets
```

## Clone

```shell
cd cloned_repo
cat secrets/hello.md
git-crypt unlock my-magical-key
cat secrets/hello.md
```
