# Laravel-elixir-es5-plus-bundler.md

`laravel-elixir` with it's dependencies (like `uglify` or`gulp-babel`) is obsolete and can not handle newer syntax. 
Latest laravel versions uses `laravel-mix` with webpack in it's core.

## gulpfile.js

```js
var elixir = require('laravel-elixir');
var gulp = require('gulp');
var uglify = require('gulp-uglify-es').default;

elixir(function (mix) {
	reppBundleJS(['js/apples.js', 'js/bananas.js'], 'public/js','app.js');
})

// A least-intrusive temp fix for bundling JS above ES5.
// `laravel-elixir` with it's dependencies is obsolete and can not handle newer syntax. 
// Latest laravel versions uses `laravel-mix` with webpack in it's core.
function reppBundleJS(scripts, outputDirectory, outputFilename) {
    elixir.Log.heading('Bundling JS to...').files(outputDirectory + '/' + outputFilename);
    return (
        gulp
        .src(scripts)
        .pipe(elixir.Plugins.if(elixir.config.sourcemaps, elixir.Plugins.sourcemaps.init()))
        .pipe(elixir.Plugins.concat(outputFilename))
        .pipe(elixir.Plugins.if(elixir.config.production, uglify()))
        .pipe(elixir.Plugins.if(elixir.config.sourcemaps, elixir.Plugins.sourcemaps.write('.')))
        .pipe(gulp.dest(outputDirectory))
    );
}
```
