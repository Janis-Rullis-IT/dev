# package-json.md

## `"main"` param
* https://stackoverflow.com/a/22513200
* https://docs.npmjs.com/cli/v9/configuring-npm/package-json#main

The main field is a module ID that is the primary entry point to your program. That is, if your package is named foo, and a user installs it, and then does require("foo"), then your main module's exports object will be returned.
This should be a module ID relative to the root of your package folder.
For most modules, it makes the most sense to have a main script and often not much else.

To put it short:
* You only need a main parameter in your package.json if the entry point to your package differs from index.js in its root folder. For example, people often put the entry point to lib/index.js or lib/<packagename>.js, in this case the corresponding script must be described as main in package.json.
* You can't have two scripts as main, simply because the entry point require('yourpackagename') must be defined unambiguously.
