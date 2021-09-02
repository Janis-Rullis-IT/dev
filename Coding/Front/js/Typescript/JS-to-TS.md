# JS-to-TS.md

* https://medium.com/airbnb-engineering/ts-migrate-a-tool-for-migrating-to-typescript-at-scale-cd23bfeb5cc
* https://github.com/airbnb/ts-migrate/tree/master/packages/ts-migrate
* https://dev.to/kojikanao/introduce-typescript-to-react-js-project-with-ts-migrate-190h

**This command makes commits! So CHECKOUT TO A DIFFERENT BRANCH!**

```shell
git checkout -b feature_js-to-ts
npm install --save-dev ts-migrate
ts-migrate migrate --help
```

## If the whole project can be migrated then in project's root dir

```shell
ts-migrate-full .
```
or
```shell
npx -p ts-migrate -c "ts-migrate-full ."
```

## If only certain directories

```shell
ts-migrate-full . --sources "resources/assets/js/products"
```
