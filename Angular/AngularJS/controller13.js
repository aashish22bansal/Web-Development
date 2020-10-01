var app=angular.module('mainApp',['ngRoute']);

app.config(function($routeProvider){
    $routeProvider
    .when('/',{
        template: '<b>This text is bold</b>',
        templateUrl: 'page.html'
        /*In this, 'template' has higher preferrence as compared to 'templateUrl'. If template is specified, then templateUrl will not work.*/
    })
    .when('/helloUser',{
        templateUrl: 'hello.html'
    })
    .otherwise({
        redirectTo: '/'
    })
})