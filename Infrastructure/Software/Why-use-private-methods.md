# [Why-use-private-methods.md](https://www.codewithjason.com/purpose-private-methods-use/) 
* https://www.codewithjason.com/exactly-makes-bad-code-bad/

## EASY TO UPDATE because they are used ONLY IN THIS CLASS*

No need to go over the whole code base and change all the calls.

## Not in a public API

* Public methods are like a sign that they will be documented and won't change (that often). 
* Tools that generate API from the code will build a cleaner available list for the public.

'* Those who uses them via reflectors are violators and cannot raise complains.
