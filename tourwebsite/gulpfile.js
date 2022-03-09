const gulp    = require('gulp');
const postcss = require('gulp-postcss');
const sass    = require('gulp-sass')(require('sass'));
const cssnano = require('cssnano');


function style() {
    let plugins = [
        cssnano(),
    ];

    return gulp.src('./Assets/sass/*scss')
    .pipe(sass())
    .pipe(postcss(plugins)) //For minified code
    .pipe(gulp.dest('./Assets/Build/css'))
};


function watch() {
    gulp.watch('./Assets/sass/*scss' , style);
}

exports.style = style;
exports.watch = watch;



