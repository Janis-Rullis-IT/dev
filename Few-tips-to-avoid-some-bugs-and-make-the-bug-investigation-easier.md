
# Few tips to avoid some bugs and make the bug investigation easier 

* The bigger the release, the more unknown places where the bug could be coming from. Lesson - small and often release are good. 
* Revert dependencies if they have changed. A small dep. can affect a lot. Lesson - lock dependencies, manually set the next version number, when sure.
* Use immutable / constant variables whenever possible. Find where happens an incorrect data rewrite is very hard.
