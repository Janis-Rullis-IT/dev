# Mockery
> [Unit-vs-Integration-Tests](https://github.com/Janis-Rullis-IT/dev/blob/master/Infrastructure/Software/Unit-vs-Integration-Tests.md).

* https://docs.mockery.io/en/latest/getting_started/simple_example.html
* https://darkghosthunter.medium.com/php-10-tips-to-use-for-mockery-33673ba01321

## [Mock a private class accepted in `consturct($privClass)`](https://docs.mockery.io/en/latest/getting_started/simple_example.html)

```php
class Temperature
{
    private $privClass;

    public function __construct($privClass)
    {
        $this->privClass = $privClass;
    }

    public function average()
    {
        $total = 0;
        for ($i=0; $i<3; $i++) {
            $total += $this->privClass->readTemp();
        }
        return $total/3;
    }
}
```

```php
use \Mockery;

class TemperatureTest extends \PHPUnit\Framework\TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    public function testGetsAverageTemperatureFromThreeServiceReadings()
    {
        $service = Mockery::mock('service');
        $service->shouldReceive('readTemp')
            ->times(3)
            ->andReturn(10, 12, 14);

        $temperature = new Temperature($service);

        $this->assertEquals(12, $temperature->average());
    }
}
```
