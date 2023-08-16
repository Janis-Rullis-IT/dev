# Check-if-element-has-changed.md

* https://usefulangle.com/post/356/javascript-detect-element-added-to-dom
* https://developer.mozilla.org/en-US/docs/Web/API/MutationObserver/MutationObserver
* https://www.javascripttutorial.net/javascript-dom/javascript-mutationobserver/

```js
/**
 * Do these operations when a child is added or removed to the filter.
 */
function attachMutationObserverToFilterForm() {
    const targetNode = document.querySelector("#filterQB");
    const observerOptions = {
        childList: true,
        attributes: false,
        // signifies that only the DIRECT children of the target will be monitored.
        subtree: false
    }
    // Callback function to execute when mutations are observed
    const callback = (mutationList, observer) => {

        // TODO: Ananlyze the mutations and call this only when it makes sense.
        Delimiter.attachConvertToCommaWhenPasting('input[text]');
    };

    const observer = new MutationObserver(callback);
    observer.observe(targetNode, observerOptions);
}
```

# Ex

```html
<div id="parent"></div>
```

```js
const observer = new MutationObserver(function(mutations_list) {
	mutations_list.forEach(function(mutation) {
		mutation.addedNodes.forEach(function(added_node) {
			if(added_node.id == 'child') {
				console.log('#child has been added');
				observer.disconnect();
			}
		});
	});
});

observer.observe(document.querySelector("#parent"), { subtree: false, childList: true });
```
