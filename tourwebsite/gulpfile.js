const gulp    = require('gulp');
const postcss = require('gulp-postcss');
const sass    = require('gulp-sass')(require('sass'));
const cssnano = require('cssnano');
const terser = require("gulp-terser");
const browserSync = require('browser-sync').create();
var reload = browserSync.reload;
gulp.task('serve' , function(){
    browserSync.init( {
        proxy : "http://localhost/wordpress",
        notify:false,
    });
    gulp.watch('./Assets/sass/*.scss' , gulp.series('style'))
    gulp.watch('./Assets/JS/*.js' , gulp.series('JS'))
    gulp.watch('./*.php').on('change' , reload);
});
gulp.task('style' , function(){
    let plugins = [cssnano()];
    return gulp.src('./Assets/sass/*.scss') //scss file location
    .pipe(sass()) //sass compiler
    .pipe(postcss(plugins)) //For minified code
    .pipe(gulp.dest('./Assets/Build/css')) // compiled css
    .pipe(browserSync.stream());
})
gulp.task('JS' , function(){
    return gulp.src('./Assets/JS/*.js')
      .pipe(terser())
      .pipe(gulp.dest('./Assets/Build/js'))
      .pipe(browserSync.stream());
}) 
gulp.task('default', gulp.series('serve' ));