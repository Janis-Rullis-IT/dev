# [Blacklisted-domain.md](https://stackoverflow.com/a/26717913)

## `AppServiceProvider.php`

```php
Validator::extend('custom.email.allowed.domain', function($attribute, $email, $parameters)
{
    if( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $parts = explode('@', $email);
        if(count($parts) > 1){
            $domain = array_pop($parts);
        }
        return \DB::table('allowed_domain')->where('domain', '=', $domain)->count() > 1;
    }

    return false;
});
```

## Call

```php
$rule[] = 'custom.email.allowed.domain';
```

# translation

```php        
'email' => [
    'allowed'=>[
        'domain'=>'The given domain is not allowed.'
    ]
],
],
```
