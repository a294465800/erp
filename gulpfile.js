const gulp = require('gulp')

// devs
const babel = require('gulp-babel')

gulp.task('build-js', () => {
  gulp.src('public/assets/js/*.js')
    .pipe(babel({
      presets: ['env']
    }))
    .pipe(gulp.dest('public/dist/js/'))
})