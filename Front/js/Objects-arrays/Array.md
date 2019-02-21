# Array

```js
['Fire', 'Wind', 'Rain'].join('-');
```
> expected output: Fire-Wind-Rain

```js
'Fire-Wind-Rain'.split('-');
```
> `['Fire', 'Wind', 'Rain']`

## `commaStrToIntegerList(str)`

* https://jsfiddle.net/janis_rullis/qge0sy2t/

```js
function commaStrToIntegerList(str) {
  let arr = [];
  let ids = str.trim().split(',');
  let cnt = ids.length;
  let id;

  for (let i = 0; i < cnt; i++) {
    id = parseInt(ids[i].trim());
    if (id) {
      arr.push(id)
    }
  }

  return arr;
}
```

```js
commaStrToIntegerList('1  , 2,  3,  ');
```
> [1, 2, 3]