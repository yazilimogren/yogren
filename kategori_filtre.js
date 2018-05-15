var app = angular.module("App", []);
app.controller("AppController", function($scope, $http)
{
    $http.get("filtre_api.php").then(function(response){
        $scope.konular = response.data;
    });
});