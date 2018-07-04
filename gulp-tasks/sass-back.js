var error   = require('./common/error');
var fsys    = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        var development = plugins.environments.development;
        var production = plugins.environments.production;

        gulp.src(fsys.path.backend.css.source + 'backend.scss')
            .pipe(development(plugins.sourcemaps.init()))
            .pipe(plugins.sass({outputStyle: 'compressed'}))
            // .on('error', error)
            .pipe(plugins.autoprefixer(['last 1 versions'], {cascade: true}))
            .pipe(plugins.rename("backend.min.css"))
            .pipe(development(plugins.browserSync.reload({stream: true})))
            .pipe(development(plugins.sourcemaps.write('./')))
            .pipe(gulp.dest(fsys.path.backend.css.dest))
            .pipe(development(plugins.browserSync.stream()));
    }
};
