module.exports = function () {
    return function onError(err) {
        console.log(err);
        this.emit('end');
    }
};