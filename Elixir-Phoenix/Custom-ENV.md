# Custom ENV

By default there is :prod, :dev, :test, but you can add more.

## Print current ENV

```ex
Mix.env()
```
> :dev

## Switch ENV

```ex
MIX_ENV=prod mix multi_db
```