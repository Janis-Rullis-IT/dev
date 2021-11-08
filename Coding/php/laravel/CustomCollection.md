# [CustomCollection.md](https://laracasts.com/series/laravel-explained/episodes/6)

```php
class VideoCollection extends Collection{
  function groupByDate(){
    return $this->groupBy(...); // https://github.com/Janis-Rullis-IT/dev/blob/898d73c30021d1f7fcfc6d7ec74d3bcff89463e2/Coding/php/laravel/Groups-with-Group-by.md
  }
}

class Video extends Model{
  function newCollection(array $models = []){
    return new VideoCollection($models);
   }
}
```
