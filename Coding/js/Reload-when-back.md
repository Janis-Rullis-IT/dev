# [Reload-when-back.md](https://thewebdev.info/2022/04/30/how-to-force-reloading-a-page-when-using-browser-back-button-with-javascript)

```js
window.addEventListener("pageshow", (event) => {
    const historyTraversal = event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
    if (historyTraversal) {
        window.location.reload();
    }
});
```
