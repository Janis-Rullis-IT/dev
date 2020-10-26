# Horizontal list / menu

## Without a grid

```html
<ul>
	<li class="float-left width-150 no-bullet"><a class href="/posts">Posts</a></li>
	<li class="float-left width-150 no-bullet"><a href="/contacts">Contacts</a></li>
	<li class="float-left width-150 no-bullet"><a href="/map">Item in a map</a></li>
	<li class="float-left width-150 no-bullet"><a href="/graphs">Graphs</a></li>
</ul>
```

## With a grid

```html
<div class="row">
	<div class="col-sm-3"><a href="/">Home</a></div>
	<div class="col-sm-1">></div>
	<div class="col-sm-3"><a href="/posts">Category 1</a></div>
	<div class="col-sm-1">></div>
	<div class="col-sm-3">Post 1</div>
	<div class="col-sm-1"></div>
</div>
```
