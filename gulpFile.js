var gulp = require('gulp');
var riot = require('gulp-riot');
var concat = require('gulp-concat');

gulp.task('script', function () {
    return gulp.src(['app/**/*.tag','app/main.js'])
            .pipe(riot())
            .pipe(concat('app.js'))
            .pipe(gulp.dest('./'));
});