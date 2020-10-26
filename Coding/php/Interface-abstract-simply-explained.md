## [Why use interfaces (with examples)](https://github.com/janis-rullis/lm1-symfony5-vue2-api/issues/38#issuecomment-715359834)
* https://www.killerphp.com/articles/php-interfaces/#:~:text=Interfaces%20allow%20you%20to%20define,don't%20get%20with%20classes.
* https://www.geeksforgeeks.org/when-do-we-need-interfaces-in-php/

## Interface and abstract simply explained

https://medium.com/better-programming/understanding-use-of-interface-and-abstract-class-9a82f5f15837

## tldr

Extract the common part from the class.
Specifics are defined when the child class (that implements the interface) is passed/executed.

* Interface Car drives and honks but it doesn't say how it is done. 
* Abstract class car tells a bit how it is done bit not all. 
* Audi honks louder than Volvo. 

## difference from a regular [User/ByGender/Male inheritance](https://github.com/janis-rullis/dev/blob/master/Code-structures/Models/Accounts/User/ByGender/Male.php) 

- interface works as a guide/rule set. A regular class include already action in it. 
- abstract class includes part action and a requirement to implement some part on it's own 


### empty interface is bad
https://softwareengineering.stackexchange.com/a/352852
Called marker interfaces but still a bad practice. The purpose of interface is to have a list of allowed methods, an empty one allows everything. 

https://github.com/Janis-Rullis-IT/pr1-symfony5-api/issues/70#issuecomment-615418411 
