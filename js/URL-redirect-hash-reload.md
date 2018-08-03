# URL, redirect, hash, reload

## [Redirect](https://stackoverflow.com/a/506004)

```js
// similar behavior as an HTTP redirect
window.location.replace("http://stackoverflow.com");

// similar behavior as clicking on a link
window.location.href = "http://stackoverflow.com";
```

### Force redirect to only 1 page

```js
  let targetPage = '/buy';
  let allowedPages = [targetPage, '/login', '/logout'];
  let alowedPageCnt = allowedPages.length;

  for(let i = 0; i < alowedPageCnt; i++){

    // Avoid loop when you are at the target or allowed page.
    if(window.location.pathname.indexOf(allowedPages[i]) == -1) {
      window.location.href = targetPage;
    }
  }

```