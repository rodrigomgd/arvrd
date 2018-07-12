'use strict'

var autoprefixer = require('gulp-autoprefixer'),
csso = require('gulp-csso'),
del = require('del'),
gulp = require('gulp'),
htmlmin = require('gulp-htmlmin'),
runSequence = require('run-sequence'),
uglify = require('gulp-uglify-es').default,
browserSync = require('browser-sync').create(),
imagemin = require('gulp-imagemin'),
imageminPngQuant = require('imagemin-pngquant'),
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
        .pipe(imagemin([imageminPngQuant()]))
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
gulp.task('pages-1', () => {
   return gulp.src(['./*.php','./*.html'])
      .pipe(htmlmin({
        collapseWhitespace: true,
        removeComments: true
      }))
      .pipe(gulp.dest('dist'));
  });
gulp.task('pages-2', () => {
   return gulp.src('template-parts/*.php')
      .pipe(htmlmin({
        collapseWhitespace: true,
        removeComments: true
      }))
      .pipe(gulp.dest('dist/template-parts'));
  });

  // Clean output directory
gulp.task('clean', () => del(['dist']));

// Gulp task to minify all files
gulp.task('default', () => {
  runSequence(
    'styles',
    'scripts',
    'pages-1',
    'pages-2',
    'images'
  );
});
