# Debugging nightwatch

## Info

* reports/report.html - html
* reports/automated_report.json - json
* terminal output.

### Print out more data

Write console's output to 'logs/debug.log'

```shell
nightwatch -e chrome > logs/debug.log
```

* Save a screenshot - saveScreenshot().
* Print out current DOM - source()

```js
browser.saveScreenshot('/var/www/screenshots/debug.png').source(result => console.log(result.value)); return;
```

## Steps

* Check screenshots directory to see places where failures appeared.
* Find the according test in reports directory (contains failures and success).
* Execute only the specific test-suite`nightwatch -e chrome tests/login/`. Note: suite, because a single test can fail because it is linked to a previous test and share some data.
* Check 'reports/reports.html'.
* Open the test file and browser, simulate the same steps manually in browser.
* Break down steps and data with `console.error(data); return;`

## Exec tests

* [Tests (http://nightwatchjs.org)](http://nightwatchjs.org/guide/#tests-source)

Example - single test:

```shell
nightwatch tests/one/firstTest.js
```

Example - 2 individual tests:

```shell
nightwatch tests/one/firstTest.js tests/secondTest.js
```

Example - 1 individual test and 1 folder:

```shell
nightwatch tests/one/test.js tests/utils
```