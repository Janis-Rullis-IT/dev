# Encrypt files in a repo

* [transcrypt (elasticdog/transcrypt)](https://github.com/elasticdog/transcrypt)

## Install

```shell
git clone git@github.com:elasticdog/transcrypt.git
cd transcrypt/
sudo ln -s ${PWD}/transcrypt /usr/local/bin/transcrypt
sudo ln -s ${PWD}/transcrypt /usr/local/bin/tc
```

## Init crypting configuration for the repo

```shell
cd PATH/TO/REPO
tc
```

## Select files to enccrypt in `.gitattributes`

### All

```
* filter=crypt diff=crypt
```

### Files

```
FILE1 filter=crypt diff=crypt
FILE2 filter=crypt diff=crypt
```

### Extensions

```
*.md filter=crypt diff=crypt
*.json filter=crypt diff=crypt
```
> They wont appear as encryptes till they are added to a commit.

## Add files to a commit

```shell
git add FILE1 FILE2
git commit -m "Check transcrypt"
```

## See that they are in the encryted file list

```shell
tc --list
```
> FILE1, FILE2

## Make sure that they are encrypted before pushing

```shell
git show HEAD:FILE1 --no-textconv
```
> FsdGVkX1/mkaMGKR9u0Ov