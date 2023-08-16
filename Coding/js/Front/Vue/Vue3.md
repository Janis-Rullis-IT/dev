# Vue3.md

## [Vue2 to vue3](https://github.com/Janis-Rullis-IT/lara8-vue2-api/issues/16)

Easiest is to create a new Vue3 project with the `vue-cli`. Trying to migrate using `compat` build is quite tricky.

* https://www.youtube.com/watch?v=JfI5PISLr9w


```shell
docker exec -it ruu-vue2 bash
npm install -g @vue/cli@next
vue upgrade
vue --version
```
> @vue/cli 5.0.0-beta.3

```shell
vue create vue3
chmod a+rw vue3 -R
cd vue3
touch vue.config.js
```
## Manually select

* additionally select Typescript, Router, v3
* class-style: n.
* Use babel: y.
* Router history: y.

### Linter
* with errors only.
* Lint on save: y.
* dedicated file: y
* Save as preset: n

```shell
cat vue3/public/index.html
```

## Point NGINX to the new path

* In `vue2/build/nginx/site.conf`, set `  root /var/www/vue3/public;`.

## [In the `vue.config.js`](https://reactgo.com/change-port-number-vue/)

```js
module.exports = {
    devServer: {
        disableHostCheck: true,
        port: 3434
    }
}
```

## Start the server

```shell
npm run serve
```

* http://ruu.local:3434/

## Fix errors

That appear in the compilation process or DevTools console.
