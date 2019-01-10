# JS loops

[Loops and iteration (MDN)]( https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration).

## for...in for object props

```js
let items = {1: 123, 4: 444}

for(let i in items){
  console.log(i, items[i])
}
```

## for...of for  iterable objects (Array, Map, Set...)

```js
for (var i of arr) {
   console.log(i); // logs 3, 5, 7
}
```
> 1 123

> 4 444

## classic - for, do, while
