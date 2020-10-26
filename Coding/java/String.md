# [String](https://www.journaldev.com/16928/java-string)

Immutable in a [String Pool](https://github.com/Janis-Rullis-IT/dev/blob/master/Infrastructure/Software/String-interning-String-pool.md)

## String Immutability Benefits

Some of the benefits of String being immutable class are:

* String Constant Pool, hence saves memory.
* Security as it’s can’t be changed.
* Thread safe
* Class Loading security

```java
public class StringInternExample {

	public static void main(String[] args) {
		
		String s1 = "pankaj";
		String s2 = "pankaj";
		String s3 = new String("pankaj");
		
		System.out.println(s1==s2);//true
		System.out.println(s2==s3);//false
		
		String s4 = s3.intern();
		System.out.println(s1==s4);//true
	}
}
```
