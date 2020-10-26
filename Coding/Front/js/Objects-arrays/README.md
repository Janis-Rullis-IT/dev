# JS Arrays, objects

* [array-explorer - resource to help figure out what JavaScript array method would be best to use at any given time](https://github.com/sdras/array-explorer)

## [Object.values](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_objects/Object/values)

Extract Object values. Returns an array.

```js
const object1 = {
  a: 'somestring',
  b: 42,
  c: false
};

console.log(Object.values(object1));
// expected output: Array ["somestring", 42, false]
```

## [Array.reduce](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/reduce)

* https://jrsinclair.com/articles/2019/five-ways-to-average-with-js-reduce/

Reduce - because takes all array values and compress (by applying a defined logic) into one value,
so it is kindof reduced.

.reduce((acc, value) => acc || value.length > 0, false)

```js
const array1 = [1, 2, 3, 4];
const sumUp = (accumulator, currentValue) => accumulator + currentValue;

// 1 + 2 + 3 + 4
console.log(array1.reduce(sumUp));
// expected output: 10

// 5 + 1 + 2 + 3 + 4
console.log(array1.reduce(sumUp, 5));
// expected output: 15
```
