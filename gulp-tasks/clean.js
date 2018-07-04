var fsys = require('./../settings.json');

module.exports = function (gulp, plugins) {
    return function () {
        return plugins.del(fsys.path.ass_root);
    }
};
