/**
 * Created by Roberto Menegais on 24/04/2017.
 */


angular.module('mecanica').controller('loginController', function ($scope, $http, loginAPIService, miscService) {

    $scope.usuario = {};

    $scope.login = function (usuario, form) {
        loginAPIService.login(usuario).then(function (data) {
            console.log(data.data);
            sessionStorage.setItem('token', data.data.token);
            console.log(sessionStorage.getItem('token'));

        });
        $scope.limparFormulario(form);
    };

    $scope.salvarUsuario = function (usuario, form) {
        delete usuario.passwordConfirmation;
        usuario.status = false;
        loginAPIService.saveUser(usuario).then(function (data) {
            console.log(data.data);
        });
        $scope.limparFormulario(form);
    }


    $scope.limparFormulario = function (form) {
        delete $scope.client;
        form.$setPristine();
        form.$setUntouched();
    };

    $scope.checarCampo = $scope.checarCampo = function (campo) {
        var arguments = Array.from(arguments);
        return miscService.checarCampo(campo, arguments);
    }

});