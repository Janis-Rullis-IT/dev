# [Katalon Studio](https://www.katalon.com)

## Store a dynamic value

Could be useful in places where a random string is generated and needs to be used in further steps.

```groovy
// Set a short username.
WebUI.setText(findTestObject('MyProject/username'), '123')

// Collect that set value.
str = WebUI.getAttribute(findTestObject('MyProject/username'), 'value')

// You can even store it in a global variable (needs to be defined first).
// Currently not sure if that meaans, it will contain the same value in a next test case.
GlobalVariable.str = str

// Put it into pw field to.
WebUI.setText(findTestObject('MyProject/password'), GlobalVariable.str)
```

> Pw should appear as 3 chars.
