/**
 * Created by Roberto Menegais on 19/04/2017.
 */

angular.module("mecanica").controller("clientController", function ($scope) {

    $scope.clients = [{
        id: 1,
        name: "roberto",
        cpf: 11111111,
        status: true
    }, {
        id: 2,
        name: "roberci",
        cpf: 11111111,
        status: false
    }, {
        id: 3,
        name: "maria",
        cpf: 22222222,
        status: true
    }];

    $scope.limparFormulario = function (form) {
        form.$setPristine();
        form.$setUntouched();
    };

    $scope.carregarDados = function (client) {
        $scope.client = angular.copy(client);
    };

    $scope.salvarClient = function (client) {
        $scope.clients.push(client);
        delete $scope.client;
        $('#modalNovo').modal('hide');

    };

    $scope.editarClient = function (client) {
        var indice = $scope.clients.indexOf($scope.clients.filter(function (element) {
            return element.id == client.id;
        }).shift());
        $scope.clients.splice(indice, 1, client);
        delete $scope.client;
        $('#modalEditar').modal('hide');

    };

    $scope.excluirClient = function (client) {

        $scope.clients = $scope.clients.filter(function (element) {
            return element.id != client.id;
        });
        delete $scope.client;
        $('#modalExcluir').modal('hide');
    };

    $scope.abrirClient = function (form) {
        $scope.limparFormulario(form);
        delete $scope.client;
    }

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
    }




});