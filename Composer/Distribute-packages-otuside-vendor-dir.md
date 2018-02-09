# How to distribute packages outside the `vendor` directory?

For example in a case when you want one package to be located in `public/js` and
other in `core` directory.

Use the [`post-install` event](Execute-a-command-after-a-certain-event.md) and 
symlinks or copy the content.