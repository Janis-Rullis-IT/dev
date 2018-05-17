# Promises

* [Promise (developer.mozilla.org)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise)
* [promise-basics (javascript.info)](https://javascript.info/promise-basics)
* [Promises (davidwalsh.name)](https://davidwalsh.name/promises)

## Example

* [JSFiddle](https://jsfiddle.net/janis_rullis/2wd77s90/)

```js
var iPromise = new Promise(function(resolve, reject) {
  setTimeout(function() {
    if (1) {
      resolve('Success!');
    } else {
      reject('Failure!');
    }
  }, 2000);
});

let iPromise2 = iPromise.then(function(result) {
  let success = 'awesome!';
  alert(success);
  console.log(success);
  return success;
}).catch(function(result) {
  console.log(result);
})

iPromise2.then(function(result) {
  console.log('double ' + result);
})

```

