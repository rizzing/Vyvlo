var fsys = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        gulp.src(fsys.path.frontend.img.source + '**/*')
            .pipe(plugins.imagemin({
                interlaced: true,
                progressive: true,
                optimizationLevel: 15,
                svgoPlugins: [{removeViewBox: true}]
            }))
            .pipe(gulp.dest(fsys.path.frontend.img.dest))
    }
};