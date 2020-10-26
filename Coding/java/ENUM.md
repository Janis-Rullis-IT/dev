# [ENUM](https://www.journaldev.com/716/java-enum)

Consists of a fixed set of constants.

```java

public enum ThreadStates {
	START,
	RUNNING,
	WAITING,
	DEAD;
}
```

## ENUM over simple constant array

* type safety.
* willthrow an exception when values are changed.
