# String-interning.md

* https://superuser.com/a/1008158
* https://www.journaldev.com/797/what-is-java-string-pool 

if you have the string "foobar" 1000 times in your code, internally PHP will store 1 immutable variable for this string and just use a pointer to it for the other 999
