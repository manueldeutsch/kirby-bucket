'use strict';

var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

var sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    cleancss = require('gulp-clean-css'),
    rename = require('gulp-rename');

var browserify = require('browserify'),
    babelify = require('babelify'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer'),
    uglify = require('gulp-uglify');

function serve() {
  connect.server({
    stdio: 'ignore',
    router: 'kirby/router.php'
  }, function (){
    browserSync({
      proxy: '127.0.0.1:8000',
      cors: true
    });
  });

  gulp.watch('site/templates/**/*.php').on('change', function () {
    browserSync.reload();
  });

  gulp.watch('site/snippets/**/*.php').on('change', function () {
    browserSync.reload();
  });

  gulp.watch('assets/scss/**/*.scss', styles);
  gulp.watch('assets/js/**/*.js', javascript);
}

function styles() {
  return gulp.src(['assets/scss/*.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compact', precision: 10})
      .on('error', sass.logError)
    )
    .pipe(autoprefixer())
    .pipe(cleancss())
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets/dist'))
    .pipe(browserSync.reload({stream: true}))
}

function javascript() {
  return browserify({entries: 'assets/js/main.js', debug: true})
    .transform("babelify", { presets: ["@babel/preset-env"] })
    .bundle()
    .pipe(source('main.js'))
    .pipe(buffer())
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('/'))
    .pipe(gulp.dest('assets/dist'))
    .pipe(browserSync.reload({stream: true}))
}

gulp.task('default', gulp.series(serve))
