# Frontend-cannot-connect-to-API

> Always step on the same rake when creating a new front-> api project

When the frontend's API calls fail wihtout any reasonable message then the first thought that appears is "Containers can't resolve each names" buuuut ... 
this is not the case.

## Set up CORS on the API and config it to allow these calls

https://github.com/nelmio/NelmioCorsBundle#installation

```shell
composer req cors
```

* https://github.com/nelmio/NelmioCorsBundle#configuration

```yaml
allow_origin: ['*']
```
