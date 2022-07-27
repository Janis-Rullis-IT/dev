# with-laravel-mix.md

## With sourcemaps

```js
process.env.DISABLE_NOTIFIER = true;
const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const mix = require('laravel-mix');

// Add more error details when child processes fail.
mix.webpackConfig({ stats: { children: true } });

function generateJs(paths, desitnationDir, destinationFile) {
    if (mix.inProduction()) {
        mix.combine(paths, desitnationDir + destinationFile)
        return;
    }

    // mix methods are not used because our js dir structure togethwer with js() or combine() 
    // does not generate sourcemaps - thus forget about decent debugging in dev.
    // Tried various js() and combo() + sourceMaps, webpakcConfig combinations and options but there's always
    // something missing - either You have those sourcemaps generated but the compiled bundle has incorrect variable scope.
    // So we use gulp - which works with Node Streams thus writing to file only after the whole processing https://gulpjs.com/docs/en/getting-started/working-with-files/
    // The concat + sourcemap example https://www.npmjs.com/package/gulp-babel
    gulp.src(paths)
        .pipe(sourcemaps.init())
        .pipe(concat(destinationFile))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(desitnationDir));
}

generateJs(
    [
        'resources/assets/js/helpers.js',
        'resources/assets/js/loading.js',
    ],
    'public/js/',
    'app.js'
)
```

## Simpler

```js
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
