/**
 * Created by Roberto Menegais on 25/04/2017.
 */

angular.module("mecanica").factory('loginAPIService', function ($http, configValue) {

    var _login = function (usuario) {
        return $http.post(configValue.baseUrl + "login", usuario);
    }

    var _saveUser = function (usuario) {
        return $http.post(configValue.baseUrl + "register", usuario);
    }

    return {
        login: _login,
        saveUser: _saveUser,
    }
});