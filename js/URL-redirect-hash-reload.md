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
function redirectAllToBuy(){

  let targetPage = '/buy';
  let allowedPages = [targetPage, '/login', '/logout'];

  if(!isInAllowedPages(window.location.pathname, allowedPages)){
    window.location.href = targetPage;
  }
}

function isInAllowedPages(page, allowedPages){
  let alowedPageCnt = allowedPages.length;
  let isInAllowedPages = false;

  for(let i = 0; i < alowedPageCnt; i++){
    if(page.indexOf(allowedPages[i]) == 0) {
      isInAllowedPages = true;
      break;
    }
  }

  return isInAllowedPages;
}
```