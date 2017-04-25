/**
 * Created by Roberto Menegais on 25/04/2017.
 */

angular.module("mecanica").factory("miscService", function () {
    var _checarCampo = function (campo,arguments) {
        if (arguments.indexOf('required') > -1) {
            if ((campo.$dirty || campo.$touched) && campo.$error.required) {
                return true;
            }
        }
        if (arguments.indexOf('pattern') > -1) {
            if (campo.$error.pattern) {
                return true;
            }
        }
        if (arguments.indexOf('minlength') > -1 || arguments.indexOf('maxlength')) {
            if (campo.$error.minlength || campo.$error.maxlength) {
                return true;
            }
        }

        return false;
    };

    return {
        checarCampo: _checarCampo,
    }
});
