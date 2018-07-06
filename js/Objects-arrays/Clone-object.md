# Clone object / avoid referencing

## TL;DR

```js
copid_object = JSON.parse(JSON.stringify(my_object));
```

----------------

## Long story
* [3 Ways to clone objects in Javascript (medium.com/@Farzad_YZ)](https://medium.com/@Farzad_YZ/3-ways-to-clone-objects-in-javascript-f752d148054d)
* [JSON.parse(JSON.stringify(obj)) ](https://stackoverflow.com/a/5344074)


## 1: Converting to JSON and back

```js
function jsonCopy(src) {
  return JSON.parse(JSON.stringify(src));
}
const source = {a:1, b:2, c:3};
const target = jsonCopy(source);
console.log(target); // {a:1, b:2, c:3}
// Check if clones it and not changing it
source.a = 'a';
console.log(source.a); // 'a'
console.log(target.a); // 1
```

## 2: Deep copy using iteration

```js
function iterationCopy(src) {
  let target = {};
  for (let prop in src) {
    if (src.hasOwnProperty(prop)) {
      target[prop] = src[prop];
    }
  }
  return target;
}
const source = {a:1, b:2, c:3};
const target = iterationCopy(source);
console.log(target); // {a:1, b:2, c:3}
// Check if clones it and not changing it
source.a = 'a';
console.log(source.a); // 'a'
console.log(target.a); // 1
```

## 3: Object.assign - ONLY SHALLLOW COPY :(

```js
function bestCopyEver(src) {
  return Object.assign({}, src);
}
const source = {a:1, b:2, c:3};
const target = bestCopyEver(source);
console.log(target); // {a:1, b:2, c:3}
// Check if clones it and not changing it
source.a = 'a';
console.log(source.a); // 'a'
console.log(target.a); // 1
```
