# Mocks
Mock allows to test how the function works without external dependencies.

## Purpose

* Create a fake doppelganger of the real object - with all the required attributes and methods.
* This fake object is used so our UNIT test would be isolated and ONLY check the spots it needs and not roam around the spider web of dependencies.

### Problem

**Example**

You need to an object called OnlineUsers - which connects to external Queue or DB or API to fill the data. Crazy.

### Solution

 Instead You just fill it with fake data, set method expectations - that `OnlineUsers->getAll()` will return csv string and not an array.
