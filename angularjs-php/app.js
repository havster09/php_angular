(function () {

    var app = angular.module('funwithcountries', []);

    app.factory('countryService', ['$http', function ($http) {
        var baseUrl = "services/";
        return{
            getCountries: function () {
                return $http({
                    method: "GET",
                    url: baseUrl + "getCountries.php"
                })
            }
        };
    }]);

    app.controller('CountryController', ['$scope', 'countryService', function ($scope, countryService) {
        countryService.getCountries()
            .success(function (data) {
                $scope.countries = data;
            });
    }]);

})();