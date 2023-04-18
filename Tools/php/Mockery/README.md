# Mockery

https://github.com/Janis-Rullis-IT/dev/blob/master/Infrastructure/Software/Testing/Mocks/What-I-need-to-mock.md

## Method list
* https://github.com/mockery/mockery/blob/9ad050f4d5c838e60885d56f808dcafc56383805/library/Mockery/Expectation.php#L627

### Interface - the ruleset that needs to be met

```php
interface FrontendRouteInterface
{
    public function getBaseURL(): string;
    public function getPageURI(string $dotPath, array $params = []): string;
    public function getPageURL(string $dotPath, array $params = []): string;
}
```

### The real implementation - that the mock by-passes

```php
namespace App\Services;

use App\Interfaces\FrontendRouteInterface;

class FrontendRoute implements FrontendRouteInterface
{
    public function getBaseURL(): string
    {
        return 'todo';
    }
    public function getPageURI(string $dotPath, array $params = []): string
    {
        return 'todo';
    }
    public function getPageURL(string $dotPath, array $params = []): string
    {
        return 'todo';
    }
}
```

### Make this service a representative of the interface - in `AppServiceProvider`

```php
public function register(): void
{
    $this->app->bind(
        FrontendRouteInterface::class,
        FrontendRoute::class
    );
```

### Mock gets used in the testable code
> Mock counts meets the usage in here. So if You call the mock method 2 times then set the expectation to `->twice()`.
```php
class MyService{
    use App\Interfaces\FrontendRouteInterface;

    public function __construct(private readonly FrontendRouteInterface $frontendRoute) {}

    public function some(){
    $campaignURL = $this->frontendRoute->getPageURL(
        'user.show',
        [
            'name' => $name,
            'surname' => $surname
        ]
    );
    }
}
```

### Set the mock - expectations
```php
 protected function mockFrontendRoute()
{
    $this->mock(FrontendRouteInterface::class, function (MockInterface $mock) {
        $mock->allows()
            ->getBaseURL()
            ->andReturn('https://user.local/');

        $mock->allows()
            ->getPageURI('user.show',  ['name' => 'john', 'surname' => 'doe'])
            ->andReturn('n/john/s/doe');

        $mock->expects()
            ->getPageURL('user.show',   ['name' => 'john', 'surname' => 'doe'])
            ->andReturn('https://user.local/n/john/s/doe');
    });
}

$this->mockFrontendRoute()

// Initi DI / fill variable inits in construct.
app()->make(MyService::class, ['logger' => fn (string $text) => print('e')]);
// ~~new MyService()~~ would not init the DI and init the Interface.
```

## IMPORTANT!
The values going through the code should be the same as in the mock expectations. 
Like this `->getPageURL('user.show',   ['name' => 'john', 'surname' => 'doe'])`. Otherwise, the mock method's definition will be considered as incorrect (cant not find a matching one).
