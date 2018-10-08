# Request URL

```php
function index(Request $request)
```

## URL with a query part

```php
$request->fullUrl()
```

## URL without a query part

```php
$request->url()
```

## Check if has set a query param

```php
if($request->get('cached') !== null){
```