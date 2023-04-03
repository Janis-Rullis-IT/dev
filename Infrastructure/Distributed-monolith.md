# Distributed-monolith.md
Services require each other to be available and cannot function without other services.

* https://codeopinion.com/rest-apis-for-microservices-beware/
* https://www.youtube.com/watch?v=_4gyR6CBkUE

## Solutions
If communication is done asynchronously through messaging, this means a service does not require other services to be available.

## Latency can kill Your service
If Your service depends on another service, then because of a latency the server can timeout and thus make the connected services unavailable as well.
