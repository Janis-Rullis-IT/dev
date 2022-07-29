# Document Ready with Vanilla JavaScript

Use `<script defer` [DOM ready events considered harmful | HTTP 203](https://www.youtube.com/watch?v=_iq1fPjeqMQ).

# In the past, I guess
As this might slow the whole page see - [DOM ready events considered harmful | HTTP 203](https://www.youtube.com/watch?v=_iq1fPjeqMQ).

* [Quick Tip: Replace jQuery’s Ready() with Plain JavaScript (www.sitepoint.com)](https://www.sitepoint.com/jquery-document-ready-plain-javascript/)
* [Cross-browser Document Ready with Vanilla JavaScript (competa.com)](http://www.competa.com/blog/cross-browser-document-ready-with-vanilla-javascript/)


```js
document.addEventListener("DOMContentLoaded", function() {
   console.log('Your document is ready!');
});
```

* [JS Fiddle](https://jsfiddle.net/janis_rullis/8heb5aa1/)
