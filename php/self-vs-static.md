# [Self vs static](https://stackoverflow.com/a/5197655)


* `self` refers to the same class in which the new keyword is actually written.
* `static`, in PHP 5.3's late static bindings, refers to whatever class in the hierarchy you called the method on.