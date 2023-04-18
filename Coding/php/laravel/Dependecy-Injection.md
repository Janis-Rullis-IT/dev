# Dependecy-Injection.md
* https://github.com/Janis-Rullis-IT/dev/blob/46bcb6df6901b99ce6859f75eb1d492a8032f7ca/Tools/php/Mockery/README.md

## `app()->make(CLASS, ['custom-param' => 'val'])`

```php
class MyService{
    use App\Interfaces\FrontendRouteInterface;

    public function __construct(private readonly FrontendRouteInterface $frontendRoute, private readonly ?Closure $logger = null) {}
```

```php
// Initi DI / fill variable inits in construct.
app()->make(MyService::class, ['logger' => fn (string $text) => print('e')]);
// new MyService() would not init the DI and init the Interface.
```
