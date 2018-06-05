# Programming best practices

To avoid always re-appearing bugs, You should **always** keep these rules mind.

## Force variable data type

To avoid that number comparison does not work because they are actually numbers.

```js
if(parseInt(this.id) > parseInt(this.id2))
```

## Keep variables immutable

To avoid "Where was the value changed?".

## All functions has return value

To avoid "Was the calculation successful or did it fail?"

## Add reference to issue

To avoid "What does this fix? When was it issued?"

```js
// #1234 Decrease min count from 100 to 50.
```

## Keep every functionality in a separate function

To avoid "I need this part, but it is tightly coupled with the other code. Too lazy to take it out...".