# Set up github pages
* Go to the settings.
* Scroll down to 'GitHub Pages' block.
* Select the branch that should represent github pages.

![image](/images/set-up-github-pages/settings.png)

* Select a theme for better looks.
For example `Tactile` theme will look like this:
* [More info](https://help.github.com/articles/adding-a-jekyll-theme-to-your-github-pages-site-with-the-jekyll-theme-chooser/)

![image](/images/set-up-github-pages/page.png)

## Images are not displayed

Links works differently in github and github pages GP.
For example, `/images/img.png` will work in github but not in GP because the 
URL will become `janis-rullis.github.io/docs/img.png` but it should be
`janis-rullis.github.io`__/nginx/__`docs/img.png`. On the other hand
if you set it to `/nginx/docs/img.png` then it won't work in the github.

### To make it work in github and github pages?
Use paths relative to the current working directory. 
For example if you are in `docs` the set the URL to `img.png`.

## How to display a list of files in a directory?
If you point to directory without a README.md in it then the browser will throw
the `404 Not found` error. So we need a README file in it.
To avoid writing each file's location with hand we
can use a script that will generate the list.

### Available scripts

#### Shell script
* [A simple script from the StackOverflow](https://stackoverflow.com/a/35889620)
by [Simon](https://stackoverflow.com/users/487846/simon)
```
#!/bin/bash

tree=$(tree -tf --noreport -I '*~' --charset ascii $1 |
       sed -e 's/| \+/  /g' -e 's/[|`]-\+/ */g' -e 's:\(* \)\(\(.*/\)\([^/]\+\)\):\1[\4](\2):g')

printf "# Project tree\n\n${tree}"
```

* [My version adjusted a little bit md-tree-gen.sh](md-tree-gen.sh)

##### Usage
1. Save the script into `md-tree-gen.sh` file.
2. Make the script globally available
```
sudo mv md-tree-gen.sh /usr/local/bin/md-tree-gen
chmod a+x /usr/local/bin/md-tree-gen
```
3. Go in the command line to the required directory.
4. Execute the script with `md-tree-gen`
5. A README.md file with the list will be created.

#### For JS
* [md-file-tree](https://www.npmjs.com/package/md-file-tree)

## How to provide a navigation bar?

* The simple solution - Just add breadcrumbs by writing links yourself to the top
of each README.
* The harder version - write your custom page formatting. See [the list
of most beautiful custom Github pages](https://github.com/collections/github-pages-examples)
like [twbs/bootstrap](https://github.com/twbs/bootstrap/tree/gh-pages) or
[electron/electronjs.org](https://github.com/electron/electronjs.org/tree/gh-pages).
Yes, they are github pages even though they haven't got the
typical `USERNAME.github.io` domain (they have set the custom one in the github page's
settings). Notice that the github page content live in the `gh-pages` branch.