(function () {

    var app = angular.module('congress-people', []);

    app.directive('linkedName', function () {
        return {
            restrict: 'E',
            templateUrl: 'linked-name.html'
        };
    });

})();