# [Debug-insert-queries-and-tables.md](https://github.com/janis-rullis/lm1-symfony5-vue2-api/issues/18)

For hard to catch queryies use PMA server_status_monitor.php

## Symfony side

### Try to clear the cache

```shell
bin/console cache:clear
composer dumpautoload -o
```

### Repo

Check that `__constr` has the correct Entity and extends the correct interface

```php
public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em, Move::class);
    }
```

### Entity

At the top.

/**
 * @ORM\Entity(repositoryClass="App\Repository\MoveRepository")
 * @ORM\Table(name="`move`")
 */
 
 #### For funky names like `row` use an escaped name
 
 Otherwise INSERT errors may apper.
 
 ```php
 * @ORM\Column(name="`row`", type="integer")
 ```
