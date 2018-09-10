# Browser detect

* [Example #1: Browser detect and return a string (developer.mozilla.org)](https://developer.mozilla.org/en-US/docs/Web/API/Window/navigator#Example_1_Browser_detect_and_return_a_string)

```js
window.userAgent
```
> Is supported on IE 11 too.

## [Is IE?](https://jsfiddle.net/janis_rullis/g90shuez/)


```js
function isIE(version){
	var returnval = false;
	var agent = navigator.userAgent.toLowerCase();
  var isIE = agent.indexOf('trident') > -1;
  var isCorrectVerion = version ? agent.indexOf('rv:' + version) > -1 : true;
    
  return isIE && isCorrectVerion;
}
console.log(isIE(11));
```

## [Get browser with version (gist.github.com/barseghyanartur)](https://gist.github.com/barseghyanartur/366ab52a19d92e06bc42)

```js
function getBrowser(){
	var ua= navigator.userAgent, tem,
	M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
	if(/trident/i.test(M[1])){
		tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];u
		return 'IE '+(tem[1] || '');
	}
	if(M[1]=== 'Chrome'){
		tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
		if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
	}
	M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
	if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
	return M.join(' ');
}
```