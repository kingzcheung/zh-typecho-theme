/**
 * Created by kingzcheung on 17-7-12.
 */


var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-clean-css'),
    jshint = require('gulp-jshint'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    del = require('del');

var paths = {
    styles: {
        src: 'src/scss/**/*.scss',
        dest: 'assets/css/'
    },
    scripts: {
        src: 'src/js/**/*.js',
        dest: 'assets/js/'
    },
    fonts:{
        src: 'src/fonts/**/*.{otf,eot,svg,ttf,woff,woff2}',
        dest: 'assets/fonts/'
    }
};

function clean() {
    // You can use multiple globbing patterns as you would with `gulp.src`,
    // for example if you are using del 2.0 or above, return its promise
    return del([ 'assets' ]);
}

/*
 * Define our tasks using plain functions
 */
function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        // pass in options to the stream
        // .pipe(rename({
        //     basename: 'main',
        //     suffix: '.min'
        // }))
        .pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
    return gulp.src(paths.scripts.src, { sourcemaps: true })
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest(paths.scripts.dest));
}

function fonts() {
    return gulp.src(paths.fonts.src)
        .pipe(gulp.dest(paths.fonts.dest));
}

function watch() {
    gulp.watch(paths.scripts.src, scripts);
    gulp.watch(paths.styles.src, styles);
    gulp.watch(paths.fonts.src, fonts);
}
var build = gulp.series(clean, gulp.parallel(styles, scripts,fonts));

exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.fonts = fonts;
exports.watch = watch;
exports.build = build;

exports.default = build;
