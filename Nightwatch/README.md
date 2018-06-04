# Nightwatch

## Install

* [docker-compose.yml](docker-compose.yml)
* [Dockerfile](docker-compose.yml)

## CLI Options

* [nightwatchjs.org/guide](http://nightwatchjs.org/guide#command-line-options)

## Skip

```js
module.exports = {
    '@disabled': true,
    'login': function(browser) {
```
> test is disabled, skipping...

### Debug

```shell
 nightwatch --verbose -e chrome
```
> Request: POST /.., data:{}, headers: {}

## For beginners
https://medium.com/@karthikiyengar/rock-solid-end-to-end-continuous-integration-with-nightwatch-js-545c66c17fdd
https://github.com/zeljkofilipin/mediawiki-nightwatch
http://nightwatchjs.org/gettingstarted/#chromedriver



* [dwyl/learn-nightwatch](https://github.com/dwyl/learn-nightwatch)
* [nightwatchjs/guide](https://github.com/nightwatchjs/nightwatch-docs/tree/master/guide)
* [E2E Testing with Nightwatch: Part Two (codementor.io/johnkennedy)](https://www.codementor.io/johnkennedy/e2e-testing-with-nightwatch-part-two-b57uwf375)
* [JavaScript Functional Testing with Nightwatch.js (sitepoint.com)](https://www.sitepoint.com/javascript-functional-testing-nightwatch-js/)
* [Node.js End-to-End Testing with Nightwatch.js (risingstack.com)](https://blog.risingstack.com/end-to-end-testing-with-nightwatch-js-node-js-at-scale/)
