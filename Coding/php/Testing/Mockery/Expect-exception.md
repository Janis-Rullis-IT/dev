# Expect-exception.md

```php
<?php

namespace App\Services;

class MyClass
{
    private $log;

    public static function myMethod($log)
    {
        $log->getException();
    }
}
```

```php
<?php

class MyLog
{
    public function getException()
    {
        throw new \JsonException('AB');
    }
}

class MyClassUnitTest extends TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    public function test_mock_exception()
    {
        $this->expectException(\JsonException::class);
        $this->expectExceptionMessage('C');

        $myLog = Mockery::mock(MyLog::class);
        $myLog->expects()->getException()->andThrow(new \JsonException('C'));
        MyClass::myMethod($myLog);
    }
}
```
