'use strict';

var gulp = require('gulp'),
    plugins = require('gulp-load-plugins')({
        pattern: '*',
        overridePattern: false
    });

var fsys = require('./settings.json');

function getTask(task) {
    return require('./gulp-tasks/' + task)(gulp, plugins);
}

function onError(err) {
    console.log(err);
    this.emit('end');
}

gulp.task('clean', getTask('clean'));

gulp.task('font:gen:front', getTask('font-gen-front'));
gulp.task('font:copy:front', function () {
    return gulp.src(fsys.path.frontend.fonts.source + '**/*.*')
        .pipe(gulp.dest(fsys.path.frontend.fonts.dest));
});
gulp.task('font:copy:back', function () {
    return gulp.src(fsys.path.backend.font.source + '**/*/')
        .pipe(gulp.dest(fsys.path.backend.font.dest));
});

gulp.task('img:copy:front', function () {
    return gulp.src(fsys.path.frontend.img.source + '**/*')
        .pipe(gulp.dest(fsys.path.frontend.img.dest))
});
gulp.task('img:copy:back', function () {
    return gulp.src(fsys.path.backend.img.source + '**/*')
        .pipe(gulp.dest(fsys.path.backend.img.dest))
});

gulp.task('img:compress:front', getTask('imagemin-front'));
gulp.task('img:compress:back', getTask('imagemin-back'));

gulp.task('sass:front', getTask('sass-front'));
gulp.task('sass:back', getTask('sass-back'));

gulp.task('js:front', getTask('js-front'));
gulp.task('js:back', getTask('js-back'));

gulp.task('sync', getTask('browser-sync'));


gulp.task('watch', ['sync'], getTask('watch'));

gulp.task('build', getTask('build'));
