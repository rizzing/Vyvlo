var error   = require('./common/error');
var fsys    = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        var development = plugins.environments.development;
        var production  = plugins.environments.production;

        gulp.src(fsys.path.frontend.css.source + 'frontend.scss')
            .pipe(development(plugins.sourcemaps.init()))
            .pipe(plugins.sass({outputStyle: 'compressed'}))
            .on('error', error)
            .pipe(plugins.autoprefixer(['last 5 versions', 'last 10 IOS versions', 'last 5 IE versions'], {cascade: true}))
            .pipe(plugins.rename("frontend.min.css"))
            .pipe(development(plugins.browserSync.reload({stream: true})))
            .pipe(development(plugins.sourcemaps.write('./')))
            .pipe(gulp.dest(fsys.path.frontend.css.dest))
            .pipe(development(plugins.browserSync.stream()));
    }
};