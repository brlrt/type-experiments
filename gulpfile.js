var navName = 'breuer';

// Load Gulp
var gulp = require('gulp');

// Load Plugins
var rename = require( 'gulp-rename' );
var uglify = require( 'gulp-uglify' );
var concat = require('gulp-concat');
var sass = require('gulp-sass');


var paths = {
  themeScripts: [
      'main.js'
  ]
};

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

/*
    JS
*/

gulp.task('packScripts', function() {
  return gulp.src(paths.themeScripts)
    .pipe(concat('js/main.js'))
    .pipe( uglify() )
    // .pipe( rename( { suffix: '.min' } ) )
    .pipe(gulp.dest(''));
});


/*
    WATCH
*/

gulp.task('watch', function() {
  gulp.watch('**/*.scss', ['sass']);
  gulp.watch(paths.themeScripts, ['packScripts']);
});



// The default task (called when you run `gulp` from cli)
gulp.task('makeit', ['watch', 'sass', 'packScripts']);
