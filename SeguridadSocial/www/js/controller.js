/**
 * esta variable se pone el dominio donde va estar alojado la interface
 * ejem "www.miejemplo.com/seguridadsocial"
 * ejem "190.019.166.123/seguridadsocial"
 * @type {string}
 */
//var dominio = '127.0.0.2';
var dominio = 'matiusnet.sytes.net:8080/seguridadsocial';

angular.module('starter.controllers', [])

  .controller('UsuariosCtrl', function($scope, $http){

  $http.get('http://'+dominio+'/index.php/usuarios/obtenerusuarios')
    .success(function(result){
      $scope.usuarios = result;
      usuarios = $scope.usuarios;
      //console.log($scope.usuarios);
    })
    .error(function(result){
      console.log('algo anda mal' + result);
    })
})
/**
 * con la variable $state obtenemos el id pasado por url
 */

.controller('infoCtrl', function($scope, $state, $http){
  $scope.idEmpresa = $state.params.strIdEmpresa;
  //$http.get('http://127.0.0.2/index.php/usuarios/obtenerusuario/'.concat($scope.idEmpresa))
  $http.get('http://'+dominio+'/index.php/usuarios/obtenerusuario/'.concat($scope.idEmpresa))
    .success(function(result){
      $scope.usuario = result;
      usuario = $scope.usuario;
      console.log($scope.usuario);
    })
    .error(function(result){
      console.log('algo anda mal' + result);
    })

})

  .controller('pagosCtrl', function($scope, $state, $http){
    $scope.idEmpresa = $state.params.strIdEmpresa;
    $http.get('http://'+dominio+'/index.php/pagos/obtenerpagosusuario/'.concat($scope.idEmpresa).concat("/10"))
      .success(function(result){
        $scope.pagos = result;
        pagos = $scope.pagos;
        //console.log($scope.pagos);
      })
      .error(function(result){
        console.log('algo anda mal' + result);
      })

  })


