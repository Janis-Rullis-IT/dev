# [Traits](https://www.culttt.com/2014/06/25/php-traits)

```php
trait Sharable
{
    public function share($item)
    {
        return "share this item";
    }
}

class Post
{
    use Sharable;
}

class Comment
{
    use Sharable;
}
```
