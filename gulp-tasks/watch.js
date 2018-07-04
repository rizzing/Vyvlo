var fsys = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        //Watch on SCSS changes
        gulp.watch(fsys.path.frontend.css.source + '**/*.scss', ['sass:front']);
        gulp.watch(fsys.path.backend.css.source + '**/*.scss', ['sass:back']);

        //Watch on JS changes
        gulp.watch(fsys.path.frontend.js.source + '**/*.js', ['js:front']).on('change', plugins.browserSync.reload);
        gulp.watch(fsys.path.backend.js.source + '**/*.js', ['js:back']).on('change', plugins.browserSync.reload);

        //Watch on changes in templates
        gulp.watch(fsys.path.common.views + '**/*.php', plugins.browserSync.reload);

        //Watch on change on SVG icons for font
        gulp.watch(fsys.path.frontend.fonts.icons_source + '*.svg', ['font:gen:front']);

    }
};