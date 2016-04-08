// App dependencies
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css'); // minifies CSS -- separate task to watch
var uglify = require('gulp-uglify'); // minifies JS -- separate task to watch
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var concatCss = require('gulp-concat-css');	// concats css -- separate task to watch
// Path to scss files
var paths = { 
	scss: './scss/*.scss' 
};

// Minify CSS -> in dist folder
gulp.task('minify-css', function() {
  return gulp.src('css/*.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist'));
});

// Minify JS -> in dist folder
gulp.task('minify-js', function() {
  return gulp.src('js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist'));
});

// concatonates css into one bundle.css files
gulp.task('concat-css', function () {
  return gulp.src('css/*.css')
    .pipe(concatCss("css/bundle.css"))
    .pipe(gulp.dest('out/'));
});

// Outdated browser prefix
gulp.task('old', function () {
    return gulp.src('css/style.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist'));
});

// Sass precompile to CSS
gulp.task('sass', function() { 
	gulp.src('scss/style.scss')
		.pipe(sass({
			includePaths: ['scss']
		}))
		.pipe(gulp.dest('css'));
});

// Browser sync
gulp.task('browser-sync', function(){
	browserSync.init(["css/*.css", "js/*.js", "./*.html"], {
		server: {
			baseDir: "./"
		}
	});
});

// Watch
gulp.task('watch', ['sass', 'browser-sync', 'old'], function(){
		gulp.watch(["scss/*.scss", 
			"scss/base/*.scss", 
			"scss/sections/*.scss", 
			"scss/style/*.scss"], 
			['sass']);
});

