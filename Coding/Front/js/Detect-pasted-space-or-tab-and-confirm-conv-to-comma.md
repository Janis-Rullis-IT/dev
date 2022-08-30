# detect-pasted-space-or-tab-and-confirm-conv-to-comma.md

https://jsfiddle.net/5tcpds27/61/

```js
document.getElementById('paster').addEventListener('paste', (e) => {
  event.preventDefault();

  let paste = (event.clipboardData || window.clipboardData).getData('text');
  let words = []
  let delimiters = {
    '\t': 'tab',
    ' ': 'space'
  };

  for (const [delimiter, delimiterName] of Object.entries(delimiters)) {

    words = paste.split(delimiter);
    if (words.length > 1) {
      let message = `Values are separated using ${delimiterName}. Do You want to replace it with a comma?`;
      if (confirm(message)) {
        paste = paste.replaceAll(delimiter, ',');
        break;
      }
    }
  }
  e.target.value += paste
});
```
