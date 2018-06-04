'use strict'

var autoprefixer = require('gulp-autoprefixer'),
csso = require('gulp-csso'),
del = require('del'),
gulp = require('gulp'),
htmlmin = require('gulp-htmlmin'),
runSequence = require('run-sequence'),
uglify = require('gulp-uglify'),
browserSync = require('browser-sync').create(),
imagemin = require('gulp-imagemin'),
args = ['**/*.php','**/js/*.js','**/css/*.css'];

const AUTOPREFIXER_BROWSERS = [
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
    ];

gulp.task('serve',()=>{
    browserSync.init({
        proxy:"localhost/auraverde"
    });
    gulp.watch(args).on('change',browserSync.reload);
});

gulp.task('images', () =>
    gulp.src('img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'))
);

gulp.task('styles', () => {
    return gulp.src('css/*.css')
      // Auto-prefix css styles for cross browser compatibility
      .pipe(autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
      // Minify the file
      .pipe(csso())
      // Output
      .pipe(gulp.dest('dist/css'))
  });

  gulp.task('scripts', () => {
    return gulp.src('js/*.js')
      // Minify the file
      .pipe(uglify())
      // Output
      .pipe(gulp.dest('dist/js'))
  });

  // Gulp task to minify HTML files
gulp.task('pages', () => {
   return gulp.src(['./*.php','template-parts/*.php'])
      .pipe(htmlmin({
        collapseWhitespace: true,
        removeComments: true
      }))
      .pipe(gulp.dest('dist'));
  });

  // Clean output directory
gulp.task('clean', () => del(['dist']));

// Gulp task to minify all files
gulp.task('default', ['clean'], () => {
  runSequence(
    'styles',
    'scripts',
    'pages',
    'images'
  );
});
