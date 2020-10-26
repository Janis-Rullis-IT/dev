# Vue.js with Webpack

* [Vue.js and Webpack 4 From Scratch, Part1 (itnext.io)](https://itnext.io/vuejs-and-webpack-4-from-scratch-part-1-94c9c28a534a)

## Install packages

```shell
npm init
npm install --save vue vue-router vue-resource
npm install --save-dev webpack webpack-cli
npm install --save-dev vue-loader vue-template-compiler vue-style-loader css-loader
```


## Setup the basic structure for Vue

```shell
mkdir src && cd src
mkdir pages components router
```

### app.js

```shell
echo -e "import Vue from 'vue';
import VueResource from "vue-resource";
Vue.use(VueResource);
import router from "./router";
import App from './App.vue';
new Vue({http: {root: 'http://api.elixir.local'}, router, render: h => h(App)}).$mount("#app");
```

### App.vue

```shell
echo -e "<template>
  <div><h1>Hi, Vue</h1></div>
</template>" > App.vue
```

## Webpack

```shell
cd ..
mkdir build
```

```shell
echo -e "'use strict';

const {VueLoaderPlugin} = require('vue-loader');
module.exports = {mode: 'development', entry: ['./src/app.js'], 
	output: {path: __dirname + '/../public/dist', publicPath: '/dist/', filename: 'main.js', chunkFilename: '[name]-chunk.js'},
	module: {rules: [{test: /\.vue$/, use: 'vue-loader'}]}, plugins: [new VueLoaderPlugin()]};" > build/webpack.config.dev.js
```

```shell
nano package.json
```

```
"scripts": {
	...,
	"build": "webpack --config build/webpack.config.dev.js"
}
```

## HTML that includes the bundle file

```shell
echo -e "<html><body><div id="app"></div><script src="/dist/main.js" type="text/javascript"></script></html>" > index.html
```

## NPM build

```shell
npm run build
```
> Built at: ...

## Open in browser

You'll see 'Hi, Vue'.
