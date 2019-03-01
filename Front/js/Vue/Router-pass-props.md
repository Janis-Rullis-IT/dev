# Router-pass-props

Re-use the same component from different routes. Differntiate by passing a property.

## Router

```vue
{
  path: '/forgot', name: 'Forgot',
  component: () => import(/* webpackChunkName: "Forgot" */ '../pages/Forgot.vue'),
},
{
  path: '/create', name: 'Forgot',
  props: {new_user: true},
  component: () => import(/* webpackChunkName: "Forgot" */ '../pages/Forgot.vue'),
}
```

## Component

```vue
props: {
    new_user: { type: Boolean, default: false }
}
```