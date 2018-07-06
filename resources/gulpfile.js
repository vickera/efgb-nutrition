var gulp = require("gulp"),
		watch = require("gulp-watch"),
    sass = require("gulp-sass"),
    prefix = require("gulp-autoprefixer"),
    uglify = require("gulp-uglify"),
    gutil = require('gulp-util')
    
gulp.task('sass', function(){
	gulp.src('./sass/main.sass')
	.pipe(sass({ outputStyle: 'compressed' }))
	.on('error', gutil.log)
	.pipe(prefix())
	.on('error', gutil.log)
	.pipe(gulp.dest('../dist/'))
	
	return
})

gulp.task('js', function(){
	gulp.src('./js/main.js')
	.pipe(uglify())
	.on('error', gutil.log)
	.pipe(gulp.dest('../dist/'))
	.on('error', gutil.log)
	
	return
})

// watch resource files
gulp.task('watch', function(){
	gulp.watch('./sass/**/*.sass', ['sass'])
	gulp.watch('./js/**/*.js', ['js'])
	
	return
})

// gulp will auto watch
gulp.task('default', ['watch']);