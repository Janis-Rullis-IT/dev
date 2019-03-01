## `getNestedObject`

```js
function getNestedObject(nestedObj, pathArr) {
  return pathArr.reduce((obj, key) =>
      (obj && obj[key] !== 'undefined') ? obj[key] : undefined, nestedObj);
}
```

```js
getNestedObject({}, ['basket', 'fruits', 'apple'])
```
> undefined

```js
getNestedObject({'basket': {}}, ['basket', 'fruits', 'apple'])
```
> undefined

```js
getNestedObject({basket: {fruits: {}}}, ['basket', 'fruits', 'apple'])
```
> undefined

```js
getNestedObject({basket: {fruits: {apple: 2}}}, ['basket', 'fruits', 'apple'])
```
> 2

## Has a deep property

```js
function hasProp(nestedObj, pathArr) {
    let obj = getNestedObject(nestedObj, pathArr);
    return typeof obj !== 'undefined' && obj !== null && obj !== false;
}
```