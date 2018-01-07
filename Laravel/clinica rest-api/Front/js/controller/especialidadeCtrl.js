angular.module("clinica").controller("especialidadeCtrl", function($scope, $rootScope, $http) {
    var url = angular.copy($rootScope.url);
    url += "especialidades";

    get();


    $scope.exibirEspecialidade = function(idEspecialidade) {
        angular.forEach($scope.especialidades, function(especialidade, i) {
            if (idEspecialidade == especialidade.id) {
                if (especialidade.ativo == 1)
                    especialidade.ativo = true;
                else
                    especialidade.ativo = false;
                $scope.especialidade = angular.copy(especialidade);
            }
        });
        $('#especialidadeModal').modal();
    }

    $scope.novoEspecialidade = function() {
        delete $scope.especialidade;
        $('#especialidadeModal').modal();
    }

    $scope.apagarespecialidade = function(idEspecialidade) {
        angular.forEach($scope.especialidades, function(especialidade, i) {
            if (idEspecialidade == especialidade.id) {
                if (especialidade.ativo == 1)
                    especialidade.ativo = true;
                else
                    especialidade.ativo = false;
                $scope.especialidade = angular.copy(especialidade);
            }
        });

        del($scope.especialidade);
    }

    $scope.salvar = function(especialidade) {
        if ($scope.especialidade.ativo == false)
            $scope.especialidade.ativo = 0;
        else
            $scope.especialidade.ativo = 1;
        // $scope.especialidade.created_at = new Date();
        if ($scope.especialidade.id)
            put($scope.especialidade);
        else
            post($scope.especialidade);
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
            $('#especialidadeModal').modal("hide");

        }, function errorCallback(response) {
            alert("Verifique sua conexão");
        });
    }

    function get() {
        $http({
            method: 'GET',
            url: url,
        }).then(function successCallback(response) {
            $scope.especialidades = response.data;
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
            $('#especialidadeModal').modal("hide");

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