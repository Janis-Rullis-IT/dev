# reflog - even canceled changes

https://www.youtube.com/watch?v=_krbFIiFhf4&list=PLu-nSsOS6FRIg52MWrd7C_qSnQp3ZoHwW&index=13

```shell
git checkout -b zaa
echo zaa > zaa.txt
git add -A
git commit -m zaa
git checkout main
git branch -D zaa
git reflog
```
> Will display the commit made in the deleted branch `zaa`.
