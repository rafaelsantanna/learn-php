angular.module("clinica").controller("medicoCtrl", function($scope, $rootScope, $http) {
    var url = angular.copy($rootScope.url);
    url += "medicos";

    get();


    $scope.exibirMedico = function(idMedico) {
        angular.forEach($scope.medicos, function(medico, i) {
            if (idMedico == medico.id) {
                if (medico.ativo == 1)
                    medico.ativo = true;
                else
                    medico.ativo = false;
                $scope.medico = angular.copy(medico);
            }
        });
        $('#medicoModal').modal();
    }

    $scope.novoMedico = function() {
        delete $scope.medico;
        $('#medicoModal').modal();
    }

    $scope.apagarMedico = function(idMedico) {
        angular.forEach($scope.medicos, function(medico, i) {
            if (idMedico == medico.id) {
                if (medico.ativo == 1)
                    medico.ativo = true;
                else
                    medico.ativo = false;
                $scope.medico = angular.copy(medico);
            }
        });

        del($scope.medico);
    }

    $scope.salvar = function(medico) {
        if ($scope.medico.ativo == false)
            $scope.medico.ativo = 0;
        else
            $scope.medico.ativo = 1;
        // $scope.medico.created_at = new Date();
        if ($scope.medico.id)
            put($scope.medico);
        else
            post($scope.medico);
    }

    // HTTP REQUEST ---------------------------

    function post(data) {
        $http({
            method: 'POST',
            data: data,
            url: url,

        }).then(function successCallback(response) {
            alert("Salvo com sucesso");
            get();
            $('#medicoModal').modal("hide");

        }, function errorCallback(response) {
            alert("Verifique sua conexão");
        });
    }

    function get() {
        $http({
            method: 'GET',
            url: url,
        }).then(function successCallback(response) {
            $scope.medicos = response.data;
        }, function errorCallback(response) {
            alert("Verifique sua conexão");
        });
    }

    function put(data) {
        $http({
            method: 'PUT',
            data: data,
            url: url + "/" + data.id,
        }).then(function successCallback(response) {
            alert("Salvo com sucesso");
            get();
            $('#medicoModal').modal("hide");

        }, function errorCallback(response) {
            alert("Verifique sua conexão");
        });
    }

    function del(data) {
        $http({
            method: 'DELETE',
            data: data,
            url: url + "/" + data.id,
        }).then(function successCallback(response) {
            alert("Apagado com sucesso");
            get();

        }, function errorCallback(response) {
            alert("Verifique sua conexão");
        });
    }
});