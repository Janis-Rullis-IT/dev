## Vue use layout


## layouts/Hompage.vue

```vue
<template lang="html">
Homepage.
</template>

<script>
export default {
  name: 'homepage-layout',
}
</script>
```

## pages/Terms.vue

```vue
<template lang="html">
    <homepage-layout>
        Terms.
    </homepage-layout>
</template>

<script>
import homepageLayout from '../layouts/Homepage.vue';
export default {
  name: 'Terms',
  components: {homepageLayout}
}
</script>
```

## Caution

I'm most probably wrong but...
You can not freely name the variable in which You'll import the layout content.

```js
import homepageLayout from '../layouts/Homepage.vue';
```
If you name it, for example `a` (`import a from ...`) then the layout will not be found.

**Only when it ends with 'layout' part.**