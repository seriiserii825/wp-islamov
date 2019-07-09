let gulp = require('gulp');
let browserSync = require('browser-sync').create();

gulp.task('serve', function(done) {

    browserSync.init({
				proxy: "wp-islamov.loc"
    });

    gulp.watch("wp-content/themes/sparrow/**/*.php").on('change', () => {
      browserSync.reload();
      done();
    });
    done();
});
gulp.task('default', gulp.series('serve'));


