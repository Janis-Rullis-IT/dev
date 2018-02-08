# [GIT: Forget already added file](https://stackoverflow.com/questions/1274057/how-to-make-git-forget-about-a-file-that-was-tracked-but-is-now-in-gitignore)

File was added but now You don't want to track it?

1. Add it to the `.gitignore`.
2. Remove it from the index
`git rm --cached <file>`