# 1-Ports-vs-Expose.md
What's the difference between the `EXPOSE` in a dockerfile and a list of `ports` in docker-compose.

Turns out `EXPOSE` - opens ONLY for the inner container net, but for the host.

https://www.baeldung.com/ops/docker-compose-expose-vs-ports#:~:text=The%20expose%20section%20allows%20us,exposes%20specified%20ports%20from%20containers.
