'use strict';

const gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    autoprefixer = require('gulp-autoprefixer'),
    clean_css = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean');

let options = {
    sass_path: __dirname + '/sources/sass/',
    css_path: __dirname + '/web/css/'
};

let scssFiles = [
    options.sass_path + '**/*.scss',
    '!' + options.sass_path + '**/_*.scss',
];

let cssFiles = [
    options.css_path + '**/*.css',
    options.css_path + '**/*.map',
];

gulp.task('clean:css', () => gulp.src(cssFiles).pipe(clean()));

gulp.task('sass', gulp.series('clean:css', () => gulp.src(scssFiles)
    .pipe(sass({
        noCache: true,
        outputStyle: 'compressed',
        sourceMap: true,
        includePaths: [
            __dirname + '/node_modules/bootstrap/scss',
        ]
    }))
    .pipe(autoprefixer())
    .pipe(clean_css({}))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest(options.css_path))
));

gulp.task('default', gulp.series('sass'));
