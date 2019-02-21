# Form

## Prevent default

* https://jsfiddle.net/janis_rullis/1umq7go6/
* https://jsfiddle.net/janis_rullis/qge0sy2t/

```html
<form id="myform">
  <textarea id="str"></textarea>
  <button type="submit">
  Submit
  </button>
</form>
```

```js
var form = document.getElementById('myform');
function onSubmit(event) {
    if (event) { event.preventDefault(); }    
	alert('Hey');
}

form.addEventListener('submit', onSubmit, false);
form.submit = onSubmit;
```