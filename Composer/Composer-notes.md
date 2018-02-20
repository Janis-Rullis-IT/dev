# Notes about composer

## Add a new package from [packagist.org](packagist.org).

`composer require composer/composer:1.5`

where 1.5 is a [release version](https://packagist.org/packdages/composer/composer).

## [Running composer in a different directory than current](https://stackoverflow.com/questions/33080068/running-composer-in-a-different-directory-than-current)

`composer install -d=fmw/core/tool/`

## Update vs install

Add a new package in your composer.json file.

### `install`
Nothing happens.

### `update`
Will download the new repo.

## Add a package from github

```
{
	"require": {
		"sunhater/kcfinder": "dev-master#6267051fe2b9af1a66c6020dd6f78741eb55f0c3"
	},
	"repositories": [
		{
			"type": "git",
			"url": "https://github.com/sunhater/kcfinder/"
		}
	],
```

Where `master` is the branch and `6267051fe2b9af1a66c6020dd6f78741eb55f0c3`
is the commit of a [specific release](https://github.com/sunhater/kcfinder/commit/6267051fe2b9af1a66c6020dd6f78741eb55f0c3).