# Col to comma row

* [JSFiddle](https://jsfiddle.net/janis_rullis/z15qgezt/)

```html
<html>

  <body>
    <textarea id="col">aaa</textarea>
    <button id="convert">Convert</button>
  </body>

</html>
```

```js
function colToRow(col) {
  let str = col.replace(new RegExp("\n", 'g'), ',');
  alert(str);
}

document.addEventListener("DOMContentLoaded", function() {
  let btn = document.getElementById('convert');
  btn.onclick=function(){
  	let col = document.getElementById('col').value;
    colToRow(col);
  }
});
```