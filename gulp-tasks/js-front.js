var error   = require('./common/error');
var fsys    = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        var development = plugins.environments.development;
        var production = plugins.environments.production;

        gulp.src([
            fsys.path.frontend.js.source + 'vendor/jquery/*.js',

            fsys.path.frontend.js.source + 'libs/bootstrap/bootstrap.js',
            fsys.path.frontend.js.source + 'libs/bootstrap-select/bootstrap-select.min.js',
            //fsys.path.frontend.js.source + 'libs/fullpage/jquery.slimscroll.js',
            fsys.path.frontend.js.source + 'libs/fullpage/jquery.fullpage.js',

            fsys.path.frontend.js.source + 'app/app.js',
            fsys.path.frontend.js.source + 'app/map.js'
        ])
            .pipe(plugins.concat('frontend.min.js'))
            .on('error', error)
            .pipe(production(plugins.uglify({compress: {drop_console: true}})))
            .on('error', error)
            .pipe(gulp.dest(fsys.path.frontend.js.dest))
    }
};
