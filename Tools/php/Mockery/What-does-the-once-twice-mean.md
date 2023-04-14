# What-does-the-once-twice-mean?

```php
namespace App\Services;

class MyClass
{
    private $log;

    public static function myMethod($log)
    {
        $log->write('Start.');
        $log->increment();

        echo "My method is sooo great :D.";

        $log->write('End.');
        $log->increment();
    }
}
```

```php
use PHPUnit\Framework\TestCase;
use App\Services\MyClass;
use Mockery;

class MyLog
{
    private int $counter = 0;

    public function write(string $message): void
    {
        file_put_contents('my.log', $message, FILE_APPEND);
    }

    public function increment(): int
    {
        return $this->counter++;
    }

    public function total(): int
    {
        return $this->counter;
    }
}

class MyClassUnitTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_mock_counters()
    {
        $myLog = Mockery::mock(MyLog::class);
        $myLog->expects()->write('Start.')->once();
        $myLog->expects()->write('End.')->once();
        $myLog->expects()->increment()->twice();
        $myLog->expects()->total()->andReturn(2);
        MyClass::myMethod($myLog);
        $this->assertEquals(2, $myLog->total());
    }
}
```
