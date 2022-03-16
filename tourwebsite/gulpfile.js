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
    gulp.watch('./assets/sass/*.scss' , gulp.series('style'))
    gulp.watch('./assets/js/*.js' , gulp.series('JS'))
    gulp.watch('./*.php').on('change' , reload);
});

gulp.task('build-images-dev', function() {
    return gulp.src(['./assets/images/*.{jpeg,png,svg}'])
        .pipe(gulp.dest('./assets/build/images'));
  });
 
gulp.task('style' , function(){
    let plugins = [cssnano()];
    return gulp.src('./assets/sass/*.scss') //scss file location
    .pipe(sass()) //sass compiler
    .pipe(postcss(plugins)) //For minified code
    .pipe(gulp.dest('./assets/build/css')) // compiled css
    .pipe(browserSync.stream());
})
gulp.task('JS' , function(){
    return gulp.src('./assets/js/*.js')
      .pipe(terser())
      .pipe(gulp.dest('./assets/build/js'))
      .pipe(browserSync.stream());
}) 
gulp.task('default', gulp.series( 'build-images-dev' ,  'serve' ));