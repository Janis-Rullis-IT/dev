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