# [Groups-with-Group-by.md](https://laracasts.com/series/laravel-explained/episodes/6)

```php
Posts::latests()->get()->groupBy(function($video) {
   if($video->created_at->isToday(){
      return 'today';
   } else {
      return 'other';
   }
});
```
> `['today'=> [...], 'other'=>[...]`.
