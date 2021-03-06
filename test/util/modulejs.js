(function () {
'use strict';

function clearModulejs() {

    _.each(modulejs._private.instances, function (val, key) {

        delete modulejs._private.instances[key];
    });
}

function mockConfigModule() {

    modulejs.define('config', window.util.uniqObj());
}

window.util = window.util || {};
window.util.clearModulejs = clearModulejs;
window.util.mockConfigModule = mockConfigModule;

}());
