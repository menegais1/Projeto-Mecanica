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

    var carregarClients = function (numberPage, page) {
        numberPage = (numberPage) ? numberPage : 5;
        page = (page) ? (page * numberPage) : 0;
        $http.get('http://127.0.0.1:8000/api/client/' + page + '/' + numberPage
        ).then(function (data) {
            console.log(numberPage);
            console.log(page);
            console.log(data.data);
            console.log(data.data[data.data.length - 1]);

            var clients = data.data.splice(0, data.data.length - 1);
            var total = data.data.shift();
            $scope.pages = [];
            for (var i = 0; i < Math.ceil((total / numberPage)); i++) {
                $scope.pages.push(i);
            }
            $scope.clients = clients;

        });
    };

    $scope.salvarClient = function (client, numberPage, page) {
        if (!client.status) {
            client.status = false;
        }
        $http.post('http://127.0.0.1:8000/api/client', client).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage, page);
            delete $scope.client;
            $('#modalNovo').modal('hide');
        });

    };

    $scope.editarClient = function (client, numberPage, page) {
        $http.put('http://127.0.0.1:8000/api/client/' + client.id, client).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage, page);
            delete $scope.client;
            $('#modalEditar').modal('hide');
        });
    };

    $scope.excluirClient = function (client, numberPage, page) {
        $http.delete('http://127.0.0.1:8000/api/client/' + client.id).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage, page);
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

    $scope.numberPerPage = function (numberPage, page) {
        console.log(numberPage);
        carregarClients(numberPage, page);
    };


    carregarClients(5, 0);

});