/**
 * Created by Roberto Menegais on 19/04/2017.
 */

angular.module("mecanica").controller("clientController", function ($scope, clientAPIService, miscService) {

    $scope.clients = [];


    var limparFormulario = function (form) {
        //checar erro com ng-pattern
        delete $scope.client;
        form.$setPristine();
        form.$setUntouched();

    };

    $scope.carregarDados = function (client) {
        $scope.client = angular.copy(client);
    };

    var carregarClients = function (numberPage, page) {
        numberPage = (numberPage) ? numberPage : 5;
        page = (page) ? (page * numberPage) : 0;
        clientAPIService.getClients(page, numberPage).then(function (data) {
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
        clientAPIService.saveClient(client).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage, page);
            delete $scope.client;
            $('#modalNovo').modal('hide');
        });

    };

    $scope.editarClient = function (client, numberPage, page) {
        clientAPIService.updateClient(client).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage, page);
            delete $scope.client;
            $('#modalEditar').modal('hide');
        });
    };

    $scope.excluirClient = function (client, numberPage, page) {
        clientAPIService.deleteClient(client).then(function (data) {
            console.log(data.data);
            carregarClients(numberPage, page);
            delete $scope.client;
            $('#modalExcluir').modal('hide');
        });

    };

    $scope.abrirClient = function (form) {
        limparFormulario(form);
    }

    $scope.checarCampo = function (campo) {
        var arguments = Array.from(arguments);
        return miscService.checarCampo(campo, arguments);
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