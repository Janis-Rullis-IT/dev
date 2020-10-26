# Bit field

* https://en.m.wikipedia.org/wiki/Bit_field

## [When to use bit-fields in C?](https://stackoverflow.com/a/24933481)

> The basic reason is to reduce the size used. 

Tell that You need to use only the bit size of memory and not the full int. Something like TINYINT vs BIGINT in MYSQL.
