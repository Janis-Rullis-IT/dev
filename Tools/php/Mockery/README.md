# Mockery
> [Unit-vs-Integration-Tests](https://github.com/Janis-Rullis-IT/dev/blob/master/Infrastructure/Software/Unit-vs-Integration-Tests.md).

* https://docs.mockery.io/en/latest/getting_started/simple_example.html
* https://darkghosthunter.medium.com/php-10-tips-to-use-for-mockery-33673ba01321

## Purpose

* Create a fake doppelganger of the real object - have all the required attributes and methods.
* This fake object is used so our UNIT test would be isolated and ONLY check the spots it needs. And not roam around the spider web of dependencies - like You need to an object called OnlineUsers - which connects to external Queue or DB to fill the data. Instead You just fill it with fake data, set method expectations - that `OnlineUsers->getAll()` will return csv string and not an array.
