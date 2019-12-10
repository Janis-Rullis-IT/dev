# Interface and abstract simply explained

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
