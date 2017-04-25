/**
 * Created by Roberto Menegais on 24/04/2017.
 */


angular.module('mecanica').controller('loginController', function ($scope, $http) {

    $scope.usuario = {};

    $scope.login = function (usuario, form) {
        $http.post("http://127.0.0.1:8000/api/login", usuario).then(function (data) {
            console.log(data.data);
            sessionStorage.setItem('token', data.data.token);
            console.log(sessionStorage.getItem('token'));

        });
        $scope.limparFormulario(form);
    };

    $scope.salvarUsuario = function (usuario,form) {
        delete usuario.passwordConfirmation;
        $http.post("http://127.0.0.1:8000/api/register", usuario).then(function (data) {
            console.log(data.data);
        });
        $scope.limparFormulario(form);
    }


    $scope.limparFormulario = function (form) {
        form.$setPristine();
        form.$setUntouched();
        delete $scope.usuario;
    };

    $scope.checarCampo = function (campo) {
        var arguments = Array.from(arguments);

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

});