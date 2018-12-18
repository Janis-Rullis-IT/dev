# Check isset

```js
typeof apple;
```
> "undefined"

```js
typeof apple.color;
```
> "aaa is not defined"

```js
let apple;
typeof apple;
```
> "undefined"

```js
let banana = 'fruit';
typeof banana;
```
> "string"

```js
let cherry = {};
typeof cherry;
```
> "object"

```js
cherry.color
typeof cherry;
```
> "object"

```js
cherry.color
typeof cherry.color;
```
> "undefined"

```js
cherry.color = 'red';
typeof cherry.color;
```
> "string"

```js
typeof cherry.taste;
```
> "undefined"

```js
function doesHaveATaste(item){
    return typeof item.taste != "undefined" && item.taste != null
}
doesHaveATaste(cherry)
```
> false

```js
cherry.taste = null;
doesHaveATaste(cherry);
```
> false

```js
cherry.taste = 'good';
doesHaveATaste(cherry);
```
> true

> false