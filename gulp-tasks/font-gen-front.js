var fsys = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        var runTimestamp = Math.round(Date.now()/1000);

        gulp.src(fsys.path.frontend.svg_font.icons_source)
            .pipe(plugins.iconfont({
                fontName: fsys.svg_font_name,
                formats: ['ttf', 'eot', 'woff', 'woff2'],
                appendCodepoints: true,
                appendUnicode: false,
                normalize: true,
                fontHeight: 1000,
                centerHorizontally: true,
                timestamp: runTimestamp
            }))
            .on('glyphs', function (glyphs, options) {
                gulp.src(fsys.path.frontend.css.source + 'common/fonts/template/_template.scss')
                    .pipe(plugins.consolidate('underscore', {
                        glyphs: glyphs,
                        fontName: options.fontName,
                        fontDate: new Date().getTime()
                    }))
                    .pipe(gulp.dest(fsys.path.frontend.css.source + 'common/fonts/'));
            })
            .pipe(gulp.dest(fsys.path.frontend.fonts.dest + fsys.svg_font_name));
    }
};