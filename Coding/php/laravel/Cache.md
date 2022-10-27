# Cache.md

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

