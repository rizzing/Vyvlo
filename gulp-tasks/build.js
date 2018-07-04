module.exports = function (gulp, plugins) {
    return function (callback) {
        plugins.runSequence(
            'clean',
            'font:copy:front',
            'font:copy:back',
            'img:copy:front',
            'img:copy:back',
            // 'img:compress:front',
            // 'img:compress:back',
            'font:gen:front',
            'sass:front',
            'sass:back',
            'js:front',
            'js:back',
            callback);
    }
};
