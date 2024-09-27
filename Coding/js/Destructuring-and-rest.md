# Destructuring-and-rest.md
https://piccalil.li/blog/a-guide-to-destructuring-in-javascript/

```js

const myArray = [ "goose", "duck", "duck", "goose" ];
const [ firstElement, , , fourthElement ] = myArray;


const myObject = {
  "key1": "first value",
  "key2": "second value",
  "key3": "third value"
};
const { key1, ...otherProperties } = myObject;


const myImage = {
  "src": "data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs",
  "alt": "A single black pixel.",
  "size": {
    "width": 600,
    "height": 400
  }
};

const { src, alt = "", size: { width = 800, height = 450 } } = myImage;


function myFunction( firstParameter, ...remainingParameters ) {

};


const myArray = [ 4, 5, 6 ];
const myMergedArray = [1, 2, 3, ...myArray ];
```
