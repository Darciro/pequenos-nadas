'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify-es').default,
    livereload = require('livereload'),
    server = livereload.createServer(),
    path = {
        node:                   './node_modules/',
        stylesSourceFolder:     './assets/stylesheets/src/',
        stylesDistFolder:       './assets/stylesheets/dist/',
        projectStylesheetFiles: './assets/stylesheets/src/',
        jsSourceFolder:         './assets/js/src/',
        jsDistFolder:           './assets/js/dist/'
    };

sass.compiler = require('node-sass');

server.watch(__dirname + "/assets");

gulp.task('sass', function () {
    return gulp.src(path.stylesSourceFolder + 'main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('bundle.css'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.stylesDistFolder));
});

gulp.task('sass:prod', function () {
    return gulp.src(path.stylesSourceFolder + 'main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(concat('bundle.min.css'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.stylesDistFolder));
});

gulp.task('sass:watch', function () {
    gulp.watch(path.stylesSourceFolder + '**/*.scss', gulp.series('sass'));
});

gulp.task('js', function () {
    return gulp.src([
            path.node + 'bootstrap/dist/js/bootstrap.bundle.js',
            path.node + 'gsap/dist/gsap.js',
            path.node + 'gsap/dist/ScrollTrigger.js',
            path.node + 'jquery-mask-plugin/dist/jquery.mask.js',
            path.node + 'slick-carousel/slick/slick.min.js',
            path.node + 'locomotive-scroll/dist/locomotive-scroll.min.js',
            path.jsSourceFolder + '*.js',
            '!' + path.jsSourceFolder + 'admin.js'
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest(path.jsDistFolder));
});

gulp.task('js:prod', function () {
    return gulp.src([
            path.node + 'bootstrap/dist/js/bootstrap.bundle.js',
            path.node + 'gsap/dist/gsap.js',
            path.node + 'gsap/dist/ScrollTrigger.js',
            path.node + 'jquery-mask-plugin/dist/jquery.mask.js',
            path.node + 'slick-carousel/slick/slick.min.js',
            path.node + 'locomotive-scroll/dist/locomotive-scroll.min.js',
            path.jsSourceFolder + '*.js',
            '!' + path.jsSourceFolder + 'admin.js'
        ])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.jsDistFolder));
});

gulp.task('js:admin', function () {
    return gulp.src([
            path.jsSourceFolder + 'admin.js'
        ])
        .pipe(concat('admin.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.jsDistFolder));
});

gulp.task('js:watch', function () {
    gulp.watch(path.jsSourceFolder + '**/*.js', gulp.series('js'));
});

gulp.task('watch', function () {
    gulp.watch(path.stylesSourceFolder + '**/*.scss', { ignoreInitial: false },  gulp.series('sass'));
    gulp.watch(path.jsSourceFolder + '**/*.js', { ignoreInitial: false }, gulp.series('js', 'js:admin'));
});

gulp.task('dev', gulp.parallel('sass', 'js'));
gulp.task('prod', gulp.parallel('sass:prod', 'js:prod'));