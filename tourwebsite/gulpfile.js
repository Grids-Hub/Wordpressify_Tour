const gulp    = require('gulp');
const postcss = require('gulp-postcss');
const sass    = require('gulp-sass')(require('sass'));
const cssnano = require('cssnano');
const browserSync = require('browser-sync').create();

gulp.task('style' , function(){
    let plugins = [
        cssnano(),
    ];
    return gulp.src('./Assets/sass/*scss') //scss file location
    .pipe(sass()) //sass compiler
    .pipe(postcss(plugins)) //For minified code
    .pipe(gulp.dest('./Assets/Build/css')) // compiled css
    .pipe(browserSync.stream())
});


gulp.task('build' , function(){
    gulp.watch('./Assets/sass/*scss' , gulp.series('style')).on('change' , browserSync.reload());
    gulp.watch('./*.php').on('change' , browserSync.reload());
});

gulp.task('browserSync' , function(){
    var files = [
        './style.css' , 
        './*.php' ,
        './Assets/Build/css/*.css',
        './Assets/JS/*.js',
    ];
    browserSync.init(files , {
        proxy : "http://localhost/wordpress/",
        notify : false
    })
});

gulp.task('default', gulp.series('style' , 'browserSync','build' ));





