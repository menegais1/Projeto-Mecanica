/**
 * Created by Roberto Menegais on 19/04/2017.
 */

angular.module("mecanica").controller("clientController", function ($scope, $http) {

    $scope.clients = [];

    $scope.limparFormulario = function (form) {
        form.$setPristine();
        form.$setUntouched();
    };

    $scope.carregarDados = function (client) {
        $scope.client = angular.copy(client);
    };

    var carregarClients = function (numberPage) {
        $http.get('http://127.0.0.1:8000/api/client/' + (numberPage || 5)
        ).then(function (data) {
            console.log(numberPage);
            console.log(data.data);
            $scope.clients = data.data;
        });
    };

    $scope.salvarClient = function (client, numberPage) {
        if (!client.status) {
            client.status = false;
        }
        $http.post('http://127.0.0.1:8000/api/client', client).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage);
            delete $scope.client;
            $('#modalNovo').modal('hide');
        });

    };

    $scope.editarClient = function (client, numberPage) {
        $http.put('http://127.0.0.1:8000/api/client/' + client.id, client).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage);
            delete $scope.client;
            $('#modalEditar').modal('hide');
        });
    };

    $scope.excluirClient = function (client, numberPage) {
        $http.delete('http://127.0.0.1:8000/api/client/' + client.id).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage);
            delete $scope.client;
            $('#modalExcluir').modal('hide');
        });

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

    $scope.ordernarPor = function (input) {
        $scope.ordenacao = input;
        $scope.ordem = !$scope.ordem;
    }

    $scope.numberPerPage = function (numberPage) {
        console.log(numberPage);
        carregarClients(numberPage);
    };


    carregarClients(5);

});