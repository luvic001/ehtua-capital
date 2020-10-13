var gulp = require('gulp');
var livereload = require('gulp-livereload')
var uglify = require('gulp-uglifyjs');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

gulp.task('imagemin', function () {
    return gulp.src('pre-images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('img'));
});


gulp.task('sass', function () {
  gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('css'))
    .pipe(gulp.dest('css'));
});

gulp.task('uglify', function() {
  gulp.src('lib/*.js')
    .pipe(uglify('script.min.js'))
    .pipe(gulp.dest('js'))
});

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch('sass/**/*.sass', ['sass']);
    gulp.watch('lib/*.js', ['uglify']);
    gulp.watch(['style.css', '*.php', 'js/*.js', 'parts/**/*.php'], function (files){
        livereload.changed(files)
    });
});
// task default gulp
gulp.task('default', ['watch', 'uglify', 'imagemin']);