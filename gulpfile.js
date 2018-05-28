'use strict'

var gulp = require('gulp'),
    browserSync = require('browser-sync').create(),
    args = ['**/*.php','**/js/*.js','**/css/*.css'];

gulp.task('serve',()=>{
    browserSync.init({
        proxy:"localhost/auraverde",
        stream:true
    });

gulp.watch(args).on('change',browserSync.reload);
})