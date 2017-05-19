function ready(cb) {
    /in/.test(document.readyState)
    ? setTimeout(ready.bind(null, cb), 9)
    : cb();
};

ready(function() {

var App = {
    init: function() {
        this.Alert();
    },
    Alert: function() {
        alert('ji whoula');
    }
}

App.init();
});