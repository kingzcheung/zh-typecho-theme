/**
 * Created by kingzcheung on 17-7-12.
 */


var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-clean-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload');

// css任务
gulp.task('stylesheet', function () {
    //编译sass
    return gulp.src('src/scss/*.scss')
        .pipe(sass())
        //添加前缀
        .pipe(autoprefixer({
            browsers:['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4','ios 7','ios 8'],
            cascade: true
        }))
        //保存未压缩文件到我们指定的目录下面
        .pipe(gulp.dest('assets/css'))
        //给文件添加.min后缀
        .pipe(rename({suffix: '.min'}))
        //压缩样式文件
        .pipe(minifycss())
        //输出压缩文件到指定目录
        .pipe(gulp.dest('assets/css'))
        //提醒任务完成
        .pipe(notify({message: 'stylesheet task complete'}));
});

// javascript任务
gulp.task('js', function () {
    //js代码校验
    return gulp.src(['src/jquery.min.js','src/js/*.js'])
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        //js代码合并
        .pipe(concat('main.js'))
        //给文件添加.min后缀
        .pipe(rename({suffix: '.min'}))
        //压缩脚本文件
        .pipe(uglify())
        //输出压缩文件到指定目录
        .pipe(gulp.dest('assets/js'))
        //提醒任务完成
        .pipe(notify({message: 'javascript task complete'}));
});

// Images任务
gulp.task('images', function () {
    return gulp.src('src/images/*')
        .pipe(cache(imagemin({optimizationLevel: 3, progressive: true, interlaced: true})))
        .pipe(gulp.dest('assets/images'))
        .pipe(notify({message: 'Images task complete'}));
});

//FONTS
gulp.task('fonts',function () {
   return gulp.src('src/fonts/*')
       .pipe(gulp.dest('assets/fonts'))
       .pipe(notify({message: '字体加载成功'}));
});

// default 任务
gulp.task('default', function () {
    // Watch .scss files
    gulp.watch('src/scss/*.scss', ['stylesheet']);
    // Watch .js files
    gulp.watch('src/js/*.js', ['js']);
    // Watch image files
    gulp.watch('src/images/*', ['images']);
    // Create LiveReload server
    livereload.listen();
    // Watch any files in assets/, reload on change
    gulp.watch(['./*.html','./src/**']).on('change', livereload.changed);
});