# Method, classes

## Def val

```js
function apple(tasy = true){
    alert('ha');
}
```

## [Export](https://medium.com/@timoxley/named-exports-as-the-default-export-api-670b1b554f65#a279)

```js
export default {
  speak () {
    return 'moo'
  },
  eat () {
    return 'cow eats'
  },
  drink () {
    return 'cow drinks'
  }
}
```
```js
import cow from './default-cow.js'
import goat from './default-goat.js'

cow.speak() // moo
goat.speak() // baa
```