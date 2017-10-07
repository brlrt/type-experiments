// Load Gulp
var gulp = require('gulp');

// Load Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');

/*
    SASS
*/

gulp.task('sass', function () {
  return gulp.src('scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    // .pipe(rename('style.css'))
    // .pipe(concat('style.css'))
    .pipe(gulp.dest(''));
});



gulp.task('packScripts', function() {
  return gulp.src('components/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest(''));
});


/*
    WATCH
*/

gulp.task('watch', function() {
  gulp.watch('**/*.scss', ['sass']);
  gulp.watch('components/*.js', ['packScripts']);
});



// The default task (called when you run `gulp` from cli)
gulp.task('makeit', ['watch', 'sass', 'packScripts']);
