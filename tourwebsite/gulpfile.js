const gulp    = require('gulp');
const postcss = require('gulp-postcss');
const sass    = require('gulp-sass')(require('sass'));
const cssnano = require('cssnano');


gulp.task('style' , function(){
    let plugins = [
        cssnano(),
    ];

    return gulp.src('./Assets/sass/*scss') //scss file location
    .pipe(sass()) //sass compiler
    .pipe(postcss(plugins)) //For minified code
    .pipe(gulp.dest('./Assets/Build/css')) // compiled css
    
});


gulp.task('build' , function(){
    gulp.watch('./Assets/sass/*scss' , gulp.series('style'));
});

gulp.task('default', gulp.series('style' , 'build'));





