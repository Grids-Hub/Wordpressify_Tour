const { series , parallel , src , dest , task , watch} = require('gulp')
const sass  = require('gulp-sass')(require('sass'))
const {join} = require('path')
const cleanCSS = require('gulp-clean-css')
const rename = require('gulp-rename')
const terser = require('gulp-terser')
const {sync} = require('glob')
const imagemin = require('gulp-imagemin')
var browserSync = require('browser-sync').create();


sass.compiler = require('node-sass')
const path = __dirname

task('CompileSCSS' , function(){
    return src(join(path , 'assets/sass' , '*.scss' ))
    .pipe(sass().on('error' , sass.logError))
    .pipe(dest(join( path , 'dist/css')))
})
task('CompileJS' , function(){
    return src(join(path , 'assets/js' , '*.js' ))
    .pipe(terser())
    .pipe(dest(join( path , 'dist/js')))
 })
task('MinifyCSS' , function(){
    return src(join(path ,'dist/css' , '!(*.min).css') )
    .pipe(cleanCSS({ compatibility : 'ie8'}))
    .pipe(
        rename(({dirname , basename , extname}) => ({
        dirname ,
        basename :`${basename}.min`,
        extname,
    })))
    .pipe(dest(join( path , 'dist/css')))
    .pipe(browserSync.stream())
 })
task('MinifyJS' , function(){
    return src(join(path ,'dist/js' , '!(*.min).js') )
    .pipe(
        rename(({dirname , basename , extname}) => ({
        dirname ,
        basename :`${basename}.min`,
        extname,
    })))
    .pipe(dest(join( path , 'dist/js')))
    .pipe(browserSync.stream())
 })
task('images', function() {
    return src('./assets/images/*')
    .pipe(imagemin())
    .pipe(dest('./dist/images'))
})
task('server' , function(){
    browserSync.init({
        files : [
            'dest/css/*.css'
        ],
        proxy : 'http://localhost/wordpress/' ,
        notify: true ,
    })
})
task('reload' , function(cb) {
    browserSync.reload();
    console.log("loaded")
    cb()
})
task('watch' , function(cb){
    const jsfile = sync(join(path , 'assets/js' , '*.js'))
    watch(jsfile , series('CompileJS' , 'MinifyJS' , 'reload' ))
    const sassfile = sync(join(path , 'assets/sass' , '*.scss'))
    watch(sassfile , series('CompileSCSS' , 'MinifyCSS' , 'reload') )
    const phpfile = sync(join(path , '*.php'))
    watch(phpfile , series('reload') )
    cb()
})
task('default' , series(
    parallel('CompileSCSS' ,'CompileJS'),
    parallel('MinifyCSS' , 'MinifyJS'),
    'images',
    'watch' ,
    'server'
))