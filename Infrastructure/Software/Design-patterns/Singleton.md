# Singleton

* https://www.journaldev.com/1377/java-singleton-design-pattern-best-practices-examples#:~:text=5.%20Bill%20Pugh%20Singleton%20Implementation

Class is global and must be initialized only once.

Used for processes that must be always reachable. 
DB, cache, log. 

## Tricky 

* make reachable but put in thr mem only when called.
* must keep multi threading in mind. See 5. Bill Pugh Singleton Implementation. 
