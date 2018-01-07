angular.module("clinica").controller("pacienteCtrl", function($scope, $rootScope, $http) {
    var url = angular.copy($rootScope.url);
    url += "pacientes";

    get();


    $scope.exibirPaciente = function(idPaciente) {
        angular.forEach($scope.pacientes, function(paciente, i) {
            if (idPaciente == paciente.id) {
                if (paciente.ativo == 1)
                    paciente.ativo = true;
                else
                    paciente.ativo = false;
                $scope.paciente = angular.copy(paciente);
            }
        });
        $('#pacienteModal').modal();
    }

    $scope.novopaciente = function() {
        delete $scope.paciente;
        $('#pacienteModal').modal();
    }

    $scope.apagarpaciente = function(idpaciente) {
        angular.forEach($scope.pacientes, function(paciente, i) {
            if (idpaciente == paciente.id) {
                if (paciente.ativo == 1)
                    paciente.ativo = true;
                else
                    paciente.ativo = false;
                $scope.paciente = angular.copy(paciente);
            }
        });

        del($scope.paciente);
    }

    $scope.salvar = function(paciente) {
        if ($scope.paciente.ativo == false)
            $scope.paciente.ativo = 0;
        else
            $scope.paciente.ativo = 1;
        // $scope.paciente.created_at = new Date();
        if ($scope.paciente.id)
            put($scope.paciente);
        else
            post($scope.paciente);
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
            $('#pacienteModal').modal("hide");

        }, function errorCallback(response) {
            alert("Verifique sua conexão");
        });
    }

    function get() {
        $http({
            method: 'GET',
            url: url,
        }).then(function successCallback(response) {
            $scope.pacientes = response.data;
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
            $('#pacienteModal').modal("hide");

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