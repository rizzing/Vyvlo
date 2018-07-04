var fsys = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        plugins.browserSync.init({
            open: 'external',
            proxy: fsys.proxy,
            notify: false
        });
    }
};