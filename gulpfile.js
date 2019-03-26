/**
 * Created by stefan on 07-05-2018.
 * gulp-clean is replaced by gulp-rimraf
 * http://learningwithjb.com/posts/cleaning-our-build-folder-with-gulp
 */

/* jshint node: true */
"use strict";

/**
 *
 * @type {*}
 */

const gulp = require('gulp'),
    prettyError = require('gulp-prettyerror'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    cleancss = require('gulp-clean-css'),
    imagemin = require('gulp-imagemin'),
    rimraf = require('rimraf')

/**
 *
 * @type {{dist: {bower: string, html: string, php: string, js: string, css: string, img: string, fonts: string},
 * src: {bower: string, twig: string, yml: string, theme: string, js: string, style: string, img: string,
 * fonts: string}, watch: {twig: string, yml: string, theme: string, js: string, style: string, img: string,
 * fonts: string}, clean: string}}
 */


/**
 * Variables
 */
const path = {
    dist: {
        php: 'dist/templates/',
        yml: 'dist/',
        template: 'dist',
        info: 'dist',
        js: 'dist/js/',
        style: 'dist/css/',
        img: 'dist/images/',
        fonts: 'dist/fonts/'
    },
    src: {
        php: 'templates/**/*.php',
        yml: '*.yml',
        template: '*.php',
        info: '*.info',
        js: 'js/**/*.js',
        style: 'sass/style.scss',
        img: 'images/**/*.*',
        fonts: 'fonts/**/*.*'
    },
    watch: {
        php: 'templates/**/*.php',
        yml: '*.yml',
        template: '*.php',
        info: '*.info',
        js: 'js/**/*.js',
        style: 'sass/**/*.scss',
        img: 'images/**/*.*',
        fonts: 'fonts/**/*.*'
    },
    clean: './dist'
};

/**
 * clean task
 */
gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});


/**
 * task
 */


gulp.task('php:dist', function () {
    gulp.src(path.src.php)
        .pipe(gulp.dest(path.dist.php));
});


gulp.task('yml:dist', function () {
    gulp.src(path.src.yml)
        .pipe(gulp.dest(path.dist.yml));
});

gulp.task('template:dist', function () {
    gulp.src(path.src.template)
        .pipe(gulp.dest(path.dist.template));
});

gulp.task('info:dist', function () {
    gulp.src(path.src.info)
        .pipe(gulp.dest(path.dist.info));
});

gulp.task('js:dist', function () {
    gulp.src(path.src.js)
        .pipe(prettyError())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.dist.js));
});

gulp.task('style:dist', function () {
    gulp.src(path.src.style)
        .pipe(prettyError())
        .pipe(sourcemaps.init())
        .pipe(sass({
            sourceMap: true,
            errLogToConsole: true
        }))
        .pipe(prefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cleancss({compatibility: 'ie9'}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css'))
        .pipe(gulp.dest(path.dist.style));
});

gulp.task('img:dist', function () {
    gulp.src(path.src.img)
        .pipe(gulp.dest(path.dist.img));
});

gulp.task('fonts:dist', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.dist.fonts));
});

gulp.task('dist', [
    'php:dist',
    'yml:dist',
    'template:dist',
    'info:dist',
    'js:dist',
    'style:dist',
    'img:dist',
    'fonts:dist'
]);

/**
 * Watch
 */

gulp.task('watch', function(){
    watch([path.watch.php], function(event, cb) {
        gulp.start('php:dist');
    });
    watch([path.watch.yml], function(event, cb) {
        gulp.start('yml:dist');
    });
    watch([path.watch.template], function(event, cb) {
        gulp.start('template:dist');
    });
    watch([path.watch.info], function(event, cb) {
        gulp.start('info:dist');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:dist');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:dist');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('img:dist');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:dist');
    });
});


gulp.task('default', ['dist', 'watch']);