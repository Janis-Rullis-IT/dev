# How to add a directory structure in sub-directories?

Generated a tree using `md-tree-ge` into README.md but it is not displayed in
GH-Pages most probably because Jekyll did not convert it to HTML as it did with the
root README.

### More about the situation:
* I'm using one of the built-in GH-Page Jekyll themes called 'cayman'.

## What have I tried:

* Added a simple index.html file inside that directory to see if it would be 
displayed and it was but the default theme's appearance was replaced with uploaded
 HTML's.

## TODO:
* Find a way how to ask Jekyll politely to convert the README the same way as 
it did for the root README so the theme's style would not be canceled.

## SOLUTION
Jekyl requires 2 things:
1) index.md. File name should be exactly like that otherwise it will not work.
2) [Jekyll Front Matter](https://jekyllrb.com/docs/frontmatter/) at the top of
file. It is a config that tells what's the title and what layout to use. Looks
like this:
```
---
title: Hello
layout: default
---
```

## Jekyll index file priorities
1) index.html.
2) index.md.
3) README.md only if in the project's root.
