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

## [Traverse elements](//ruu.lv)

```js
sources = lazyPic.querySelectorAll("source");
var srcCnt = sources.length;			
for(var j = 0; j < srcCnt; j++){
  source = sources[j];				
}
```

## [Delay a loop](//ruu.lv)

```js
for(var i = 0; i < lazyPics.length; i++){	

  // Execture this every 0,5s. Note, the `* i`, otherwise everything is executed exactly after 0.5s.
  setTimeout(loadLazyPic, 500 * 	i, lazyPics[i]);
}
```
