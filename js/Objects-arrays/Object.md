# Object

## Add to an object containing imported vars

```js
import component1 from './component1.js';
import component2 from './component2.js';
let myComponents = {component1, component2};
import component3 from './component3.js';
myComponents.component3 = component3;
```