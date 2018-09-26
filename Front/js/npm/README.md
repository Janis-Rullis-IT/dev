# NPM

Package manager for JavaScript.

## [start](https://docs.npmjs.com/cli/start)

Runs an arbitrary command specified in the package's **"start" property of its "scripts" object**.

If no "start" property is specified on the "scripts" object, it will run node **server.js**.

```json
  "scripts": {
    "start": "node ./bin/www"
  }
```

## [build](https://docs.npmjs.com/cli/build)

* [Difference between npm install and npm run build (stackoverflow.com)](https://stackoverflow.com/questions/43664200/difference-between-npm-install-and-npm-run-build)

`npm build != npm run build`

npm run build will execute the 'build' script defined in the 'package.json'.