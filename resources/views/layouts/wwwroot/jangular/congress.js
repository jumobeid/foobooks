(function () {
    var app = angular.module('congressApp',['congress-people']);
    app.controller('CongressController', ['$http', function ($http) {
        var congress = this;
        congress.people = [];
        $http.get('people.json').success(function (data) {
            congress.people = data;
        });
    }]);

})();