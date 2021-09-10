
```js
const gulp = require('gulp');

function msg() {
    return console.log('adadad');
}

function js() {
    return console.log('js');
}

gulp.task('default', function () {
    msg();
    js();
})
```

```js
const gulp = require('gulp');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');

gulp.task('message', function(){
  return console.log('Gulp is running...');
});

// Scripts
gulp.task('scripts', function(){
  gulp.src(['js/apples/*.js', 'js/bananas/*.js'])
      .pipe(concat('fruits.js'))
      .pipe(uglify())
      .pipe(gulp.dest('public/js'));
    
      return console.log('adadasd...');
});

gulp.task('default', ['message', 'scripts']);
```
