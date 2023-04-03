# Distributed-monolith.md
Services require each other to be available and cannot function without other services.

* https://codeopinion.com/rest-apis-for-microservices-beware/
* https://www.youtube.com/watch?v=_4gyR6CBkUE

## Solutions
* async pub / sub. "Hit me up, when the billing is ready, ok?".

## Latency can kill Your service
If Your service depends on another service, then because of a latency the server can timeout and thus make the connected services unavailable as well.
