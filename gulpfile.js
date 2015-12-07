
var gulp =  require('gulp');
var plumber = require('gulp-plumber');
var rename = require("gulp-rename");
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var spritesmith = require('gulp.spritesmith');
var browserSync = require('browser-sync');


gulp.task('sass', function(){
	gulp.src('sass/**/*.scss')
		.pipe(plumber())
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(minifyCss({compatibility: 'ie8'}))
		.pipe(gulp.dest('./'))
		.pipe(browserSync.reload({stream:true}));
});

gulp.task('sprite',function(){
	var spriteData = gulp.src('images/*.png').pipe(spritesmith({
		imgName: 'sprite.png',
		cssName: '_sprite.scss',
		imgPath: 'images/sprite.png',
		cssFormat: 'scss',
		algorithm: 'top-down',
		cssVarMap: function(sprite){
			sprite.name = 'sprite-'+sprite.name;
		}
	}));
	spriteData.img
		.pipe(gulp.dest('images/'));

	spriteData.css
		.pipe(gulp.dest('sass/base/'));
});

gulp.task('images', function(){
	gulp.src('source/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('images'))
		.pipe(browserSync.reload({stream:true}));
});

gulp.task('js', function(){
	gulp.src(['js/**/*.js', '!js/min/**/*.js'])
		.pipe(plumber())
		.pipe(uglify())
		//.pipe(rename("phone.min.js"))
		.pipe(gulp.dest('./js/min/'))
		.pipe(browserSync.reload({stream:true}));
});

 gulp.task('default'/*,['server']*/,function(){
 	gulp.watch(['js/**/*.js','!js/min/**/*.js','!./gulpfile.js'],['js']);
 	gulp.watch('sass/**/*.scss',['sass']);
 	gulp.watch('source/images/**/*',['images']);
 });

 // gulp.task('default',function(){
 // 	gulp.run('sprite');
 // });
