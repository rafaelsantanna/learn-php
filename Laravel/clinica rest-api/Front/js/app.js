angular.module("clinica", []);
angular.module("clinica").controller("clinicaCtrl", function($scope, $rootScope, $http) {
    $rootScope.url = "http://laravel-clinica-rafaeel16.c9users.io/api/";

    $scope.logout = function() {
        setCookie('laravel_session', -1);
        setCookie('XDEGUB_SESSION', -1);
        setCookie('c9,live.click-through', -1);
        window.location.href = "http://laravel-clinica-rafaeel16.c9users.io/login";
    }

    function setCookie(name, exdays) //função universal para criar cookie
    {
        var expires;

        var date;

        var value;
        date = new Date(); //  criando o COOKIE com a data atual
        date.setTime(date.getTime() + (exdays * 24 * 60 * 60 * 1000));
        expires = date.toUTCString();
        value = "TESTE123";
        document.cookie = name + "=" + value + "; expires=" + expires + "; path=/";
    }
});