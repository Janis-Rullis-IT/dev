# How to find a vague bug

With a vague is meant a bug, which location can't be found, because there are no obvious identifications, like clear errors or a specific section in the website where it appears.


## Steps

* Revert to the last commit of the last successful release. You can use `git checkout COMMIT_HASH` for this. This will make sure, that this bug really is related with the last changes.
* Move up to next commits one-by-one till the bug appears.