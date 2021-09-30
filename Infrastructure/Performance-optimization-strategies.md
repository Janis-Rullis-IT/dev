# Performance-optimization-strategies.md

* Call the function in parallel. Like, call the same endpoint in concurrent sessions. Does not require any code changes. Need to follow if concurrent writes data correctly.
* Cache whatever can be cached. Read from redis / SQS / DD and store in a variable (local cache). Keep cache items small to avoid hitting size limits (like Dynammo's 400K) and keep memory, transfer low.
* Use mass / bulk inserts instead of 1 by 1. https://github.com/Janis-Rullis-IT/dev/blob/aa3069e3a7d4d0e35dcb1de4bdd27289d835ab97/Coding/php/laravel/ORM-query/Mass-bulk-insert.md 
* Queue less urgent jobs. Store data in a perm storage, if need to keep the data after the queue has been executed, and pass the ID to the queue service.
* Prep stuff in background cron jobs. 
