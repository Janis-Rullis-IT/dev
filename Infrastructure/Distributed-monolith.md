# Distributed-monolith.md
Services require each other to be available and cannot function without other services.

* https://www.youtube.com/clip/UgkxkeXLS4l28yp96_L2ansod4FYx2Td8cFU
* https://youtube.com/clip/UgkxGrTNebyeBAQ_2XC9WUclfM1sPd2y8eXk
* https://codeopinion.com/rest-apis-for-microservices-beware/
* https://www.youtube.com/watch?v=_4gyR6CBkUE
* https://betterprogramming.pub/trade-offs-on-monolithic-vs-distributed-architectures-7a04f86d47ad

## Signs
* https://torvo.com.au/articles/6-symptoms-of-a-distributed-monolith#:~:text=Distributed%20monoliths%20occur%20when%20the,the%20risk%20of%20any%20changes
* Deployment lock - When two services need to be deployed together, they are coupled.

## Solutions
* async pub / sub. "Hit me up, when the billing is ready, ok?".
* Always have a fallback. Call a service B, if A is not working.

## Latency can kill Your service
If Your service depends on another service, then because of a latency the server can timeout and thus make the connected services unavailable as well.
