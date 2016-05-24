
var specialityModule = angular.module('speciality', ['common'])
    .config(function ($routeProvider, $locationProvider) {
        $routeProvider.when('angular-symfony-master/web/app_dev.php/hello/speciality', { templateUrl: '/ghcosmetics/web/bundles/app/Speciality/Views/SpecialityHomeView.html', controller: 'specialityHomeViewModel' });
        $routeProvider.when('angular-symfony-master/web/app_dev.php/speciality/list', { templateUrl: '/angular-symfony-master/web/bundles/app/Speciality/Views/SpecialityListView.html', controller: 'specialityListViewModel' });
        $routeProvider.when('angular-symfony-master/web/app_dev.php/speciality/show/:id', { templateUrl: '/ghcosmetics/web/bundles/app/Speciality/Views/SpecialityView.html', controller: 'specialityViewModel' });
        $routeProvider.otherwise({ redirectTo: 'angular-symfony-master/web/app_dev.php/hello' });
        $locationProvider.html5Mode(true);
    });

specialityModule.factory('specialityService',
    function ($rootScope, $http, $q, $location, viewModelHelper)
    {
        return MyApp.specialityService($rootScope, $http, $q, $location, viewModelHelper);
    });


(function (myApp) {
    var specialityService = function ($rootScope, $http, $q, $location, viewModelHelper) {

        var self = this;

        self.Id = 0;

        return this;
    };
   

    myApp.specialityService = specialityService;
}(window.MyApp));
