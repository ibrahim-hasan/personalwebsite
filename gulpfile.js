var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');
var pkg = require('./package.json');

// Set the banner content
var banner = [
  '/**',
  ' ** <%= pkg.name %> - <%= pkg.description %>',
  ' * @version v<%= pkg.version %>',
  ' * @copyright <%= pkg.authors %> ' + (new Date()).getFullYear(),
  ' * @license <%= pkg.license %>',
  ' **/',
  ''
].join('\n');

// Compile SCSS files from /scss into /css
gulp.task('sass', function() {
  return gulp.src('scss/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// Minify compiled CSS
gulp.task('minify-css', ['sass'], function() {
  return gulp.src('css/style.css')
    .pipe(cleanCSS({
      compatibility: 'ie8'
    }))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// Minify custom JS
gulp.task('minify-js', function() {
  return gulp.src('js/script.js')
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('js'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// Copy src files from /node_modules into /src
// NOTE: requires `npm install` before running!
gulp.task('copy', function() {
  gulp.src(['node_modules/bootstrap/dist/**/bootstrap.min.css', 'node_modules/bootstrap/dist/**/bootstrap.min.js'])
    .pipe(gulp.dest('src/bootstrap'))

  gulp.src(['node_modules/jquery-animated-headlines/dist/**/jquery-animatedheadlines.css', 'node_modules/jquery-animated-headlines/dist/**/jquery-animatedheadline.min.js'])
    .pipe(gulp.dest('src/jquery-animated-headline'))

  gulp.src(['node_modules/jquery/dist/jquery.min.js'])
    .pipe(gulp.dest('src/jquery'))

  gulp.src(['node_modules/animate.css/animate.min.css'])
    .pipe(gulp.dest('src/animate.css'))

  gulp.src(['node_modules/jquery-smooth-scroll/jquery.smooth-scroll.min.js'])
    .pipe(gulp.dest('src/jquery-smooth-scroll'))

  gulp.src(['node_modules/font-awesome/**/font-awesome.min.css', 'node_modules/font-awesome/**/fontawesome-webfont.*'])
    .pipe(gulp.dest('src/font-awesome'))

  gulp.src(['node_modules/chart.js/dist/chart.min.js'])
    .pipe(gulp.dest('src/chart.js'))

});

// Default task.
gulp.task('default', ['sass', 'minify-css', 'minify-js', 'copy']);

// Configure the browserSync task.
gulp.task('browserSync', function() {
  browserSync.init({
    open: 'external',
		proxy: 'http://localhost/personalwebsite/',
		port: 8080
  })
});

// Dev task with browserSync.
gulp.task('dev', ['browserSync', 'sass', 'minify-css', 'minify-js'], function() {
  gulp.watch('scss/*.scss', ['sass']);
  gulp.watch('css/*.css', ['minify-css']);
  gulp.watch('js/*.js', ['minify-js']);
  // Reloads the browser whenever HTML or JS files change.
  gulp.watch('*.php', browserSync.reload);
  gulp.watch('js/**/*.js', browserSync.reload);
  gulp.watch('css/*.css', browserSync.reload);
});

// Default task (runs at initiation: gulp --verbose)
// Comment this if you want to run all tasks in this file.
gulp.task('default', ['dev']);
