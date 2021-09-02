# Error-handling.md

Use `try/catch` at the top-most level, if need to handle an exception somewhere in the code then do it and if needed return a specific type exception so the top-most level
could handle it.

## How to keep track of error numbers

Keep them in 1 place and add new ones at the end of the list.
https://github.com/microsoft/TypeScript/blob/20ecbb0f46105ccaead2970f6ef23188955e023e/src/compiler/diagnosticMessages.json#L1348-L1351
