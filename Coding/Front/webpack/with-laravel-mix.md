# with-laravel-mix.md

```json
const mix = require('laravel-mix');
mix.webpackConfig({stats: {children: true}});

function generateAppCss() {
    mix.sass('./resources/assets/sass/app.scss', 'public/css/app.css', {
        sassOptions: {
            quietDeps: true
        }
    });
}
function generateAppJs() {
    const mustCompileToES5 = true;
    mix.combine(
        [
        'resources/assets/js/helpers.js',
        'resources/assets/js/loading.js',
         ],
        'public/js/app.js',
        mustCompileToES5
    );
 }
```
