const gulp = require('gulp')
const sourcemaps = require('gulp-sourcemaps')
// devs
const babel = require('gulp-babel')
const rename = require('gulp-rename')
const clean = require('gulp-clean')
const concat = require('gulp-concat')
const less = require('gulp-less')
const cssMinify = require('gulp-clean-css')
const autoprefixer = require('gulp-autoprefixer');

// ES6 => ES5
gulp.task('build-babel', () => {
  console.info('Starting build babel...')
  gulp.src('public/assets/js/*.js')
    .pipe(babel({
      presets: ['env']
    }))
    .pipe(gulp.dest('public/dist/js/'))
})

// css concat and minify
gulp.task('build-css', () => {
  console.info('Starting concat and minify css files...')
  gulp.src('public/assets/css/*.less')
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(autoprefixer())
    .pipe(concat('erp.css'))
    .pipe(cssMinify({
      compatibility: 'ie8'
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('public/dist/css/'));
})

// html => blade.php

gulp.task('build-blade', () => {
  console.info('Starting build blade.php files...')
  gulp.src('public/views/**/*.html')
    .pipe(rename(path => {
      path.extname = '.blade.php'
    }))
    .pipe(gulp.dest('public/blade_views'))
})

// clean task, remove all files before tasks
gulp.task('clean-dist', () => {
  console.info('Starting clean up all files in folder dist...')
  return gulp.src('public/dist', {
      read: false
    })
    .pipe(clean())
})

gulp.task('clean-views', () => {
  console.info('Starting clean up all files in folder blade_views...')
  return gulp.src('public/blade_views', {
      read: false
    })
    .pipe(clean())
})

// the whole task
gulp.task('clean', ['clean-dist', 'clean-views'])
gulp.task('build', ['build-babel', 'build-css', 'build-blade'])