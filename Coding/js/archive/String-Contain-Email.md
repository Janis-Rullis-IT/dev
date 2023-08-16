# String

## Contains char?

```js
'a nice string'.indexOf('nice') !== -1 //true
```

## Simplified email check

```js
// Require min. email char count - a@b.co
 email.indexOf('@') !== -1 && email.indexOf('.') !== -1 && email.length > 5;
```