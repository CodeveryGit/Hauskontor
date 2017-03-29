'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    sass = require('gulp-sass'),
    jade = require('gulp-jade'),
    dest = require('gulp-dest');
/*
gulp-plumber
livereload
gulp-imagemin +



 */

var rigger = require('gulp-rigger');

gulp.task('rigger', function () {
    gulp.src('./src/assets/tmpl/*.jade')
        .pipe(rigger())
        .pipe(gulp.dest('src/*.jade'));
});

var path = {
    build: { //Тут мы укажем куда складывать готовые после сборки файлы
        html: 'build/templates/',
        js: 'build/assets/js/',
        css: 'build/assets/css/',
        img: 'build/assets/img/',
        fonts: 'build/assets/fonts/',
        theme: 'build/'
    },
    src: { //Пути откуда брать исходники
        html: 'src/*.jade', //Синтаксис src/*.html говорит gulp что мы хотим взять все файлы с расширением .html
        js: 'src/assets/js/*.js',//В стилях и скриптах нам понадобятся только main файлы
        css: 'src/assets/sass/**/*.scss',
        img: 'src/assets/img/**/*.*', //Синтаксис img/**/*.* означает - взять все файлы всех расширений из папки и из вложенных каталогов
        fonts: 'src/assets/fonts/**/*.*',
        theme: 'src/theme/*.*'
    },
    watch: { //Тут мы укажем, за изменением каких файлов мы хотим наблюдать
        html: 'src/**/*.jade',
        js: 'src/assets/js/*.js',
        css: 'src/assets/sass/**/*.scss',
        img: 'src/assets/img/**/*.*',
        fonts: 'src/assets/fonts/**/*.*',
        theme: 'src/theme/*.*'
    },
    clean: './build'
};

gulp.task('sass:build', function () {
    gulp.src(path.src.css)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(path.build.css));
});

gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(gulp.dest(path.build.js));
});

gulp.task('jade:build', function() {
    return gulp.src(path.src.html)
        .pipe(jade({
            pretty: true
        }))
        .pipe(dest("", { ext: "php" }))
        .pipe(gulp.dest(path.build.html))
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('image:build', function () {
    gulp.src(path.src.img) //Выберем наши картинки
        .pipe(gulp.dest(path.build.img)); //И бросим в build
});

gulp.task('theme:build', function ()
{
   gulp.src(path.src.theme)
       .pipe(gulp.dest(path.build.theme));
});

/** WATCHER **/
gulp.task('stream', function () {
    watch([path.watch.css], function (event, cb) {
        gulp.start('sass:build');
    });
    watch([path.watch.html], function (event, cb) {
        gulp.start('jade:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
    watch([path.watch.theme], function (event, cb) {
        gulp.start('theme:build');
    });
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('build', [
    'jade:build',
    'js:build',
    'sass:build',
    'fonts:build',
    'image:build',
    'theme:build'
]);
gulp.task('default', ['build', 'stream']);