# Selenium

## DEBUG

* debug: true

```json
"selenium" : {
    "start_process" : true,
    "server_path" : "./bin/selenium-server-standalone-3.4.0.jar",
    "debug": true,
    "log_path" : "./logs",
    "port" : 4445,
    "cli_args" : {
      "webdriver.chrome.driver" : "./node_modules/chromedriver/lib/chromedriver/chromedriver",
      "webdriver.gecko.driver" : "./bin/geckodriver",
      "webdriver.edge.driver" : ""
    }
  },
```

## Selenium server does start?

Nightwatch works and after the message 'Selenium server started...' it freezes.

Keep in chromeOptions.args `--headless' and remove 'windowSize'.

Like this:

```js
"desiredCapabilities": {
        "browserName": "chrome",
        "chromeOptions": {
          "args" : [
            "--no-sandbox",
            "--headless"
          ]
        },
        "acceptSslCerts": true,
        "javascriptEnabled": true
      },
```

