
angular.module('starter', ['ionic','starter.controllers'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    if(window.cordova && window.cordova.plugins.Keyboard) {

      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
      cordova.plugins.Keyboard.disableScroll(true);
    }
    if(window.StatusBar) {
      StatusBar.styleDefault();
    }
  });
})
.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider

    .state('lista', {
      url: '/lista',

      templateUrl: 'templates/lista.html',
      controller: 'UsuariosCtrl'
    });
  $stateProvider

    .state('info', {
      url: '/info/:strIdEmpresa',

      templateUrl: 'templates/infousuario.html',
      controller: 'UsuariosCtrl'
    });
  $stateProvider

    .state('pagos', {
      url: '/pagos/:strIdEmpresa',

      templateUrl: 'templates/pagos.html',
      controller: 'pagosCtrl'
    });
  $urlRouterProvider
    .otherwise('/lista')
})


