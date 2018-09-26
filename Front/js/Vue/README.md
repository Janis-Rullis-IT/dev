# Vue.js

## Editors

* [VS Code with Vetur plugin](https://github.com/vuejs/vetur)
* [Netbeans has no support. Must associate with HTML and set exception attributes.](https://github.com/janis-rullis/dev/blob/master/Code-editor/Netbeans/Setup-and-config-netbeans.md#vuejs-syntax-highlight)

## [Conditional classes](https://vuejs.org/v2/guide/class-and-style.html)

```vue
<a class="pretty-button" :class="{'red': loading, 'blue': !loading}">Button</a>
```

## [Conditional attribute](https://stackoverflow.com/a/50395724)

```vue
<a :href="loading ? 'javascript:;' : '/home'">Home</a>
```

## Props with defaults

```vue
 props: {
    accept: {
      type: Object,
      default: function () {
        return { btn: {text: 'Accept', tip: ''}}
      }
    },
    decline:  {
      type: Object,
      default: function () {
        return { btn: {text: 'Decline', tip: ''}}
      }
    }
  },
```