# Destructuring-and-rest.md
https://piccalil.li/blog/a-guide-to-destructuring-in-javascript/

```js

const myArray = [ "goose", "duck", "duck", "goose" ];
const [ firstElement, , , fourthElement ] = myArray;

const myImage = {
  "src": "data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs",
  "alt": "A single black pixel.",
  "size": {
    "width": 600,
    "height": 400
  }
};

const { src, alt = "", size: { width = 800, height = 450 } } = myImage;
```
