# Cache.md

## The current browser request caching

https://laracasts.com/discuss/channels/general-discussion/how-does-cache-driver-array-work#:~:text=I%20find%20it%20is%20a%20perfectly%20acceptable%20way%20to%20store%20data%20that%20needs%20to%20persist%20for%20the%20current%20browser%20request%20only.

Thanks a lot for the ref. It was totally worth hijacking this MR.
I'm totally adding this to my notes
"I find it is a perfectly acceptable way to store data that needs to **persist for the current browser request only.**"

```php
if ($this->cacheEnabled) {
    return cache()->store('redis')->remember($this->cacheId, $this->cacheMinutes, $callback);
} else {
    return cache()->store('array')->rememberForever($this->cacheId, $callback);
}
```

### Under the hood

https://stackoverflow.com/questions/6188994/static-keyword-inside-function


```php
class Foo
{
    public function call()
    {
        static $test = 0;

        $test++;
        echo $test . PHP_EOL; 
    }
}

$a = new Foo();
$a->call(); // 1
$a->call(); // 2
$a->call(); // 3


$b = new Foo();
$b->call(); // 4
$b->call(); // 5
```
> So if You want to clear it when the class is created again then use the class static var.
