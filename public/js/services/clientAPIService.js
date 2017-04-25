/**
 * Created by Roberto Menegais on 25/04/2017.
 */


angular.module("mecanica").factory("clientAPIService", function ($http, configValue) {

    var _getClients = function (page, numberPage) {
        return $http.get(configValue.baseUrl + 'client/' + page + '/' + numberPage);
    };

    var _saveClient = function (client) {
        return $http.post(configValue.baseUrl + 'client', client);
    }

    var _updateClient = function (client) {
        return $http.put(configValue.baseUrl + 'client/' + client.id, client);
    }

    var _deleteClient = function (client) {
        return $http.delete(configValue.baseUrl + 'client/' + client.id);
    }

    return {
        getClients: _getClients,
        saveClient: _saveClient,
        updateClient: _updateClient,
        deleteClient: _deleteClient,
    }
});
