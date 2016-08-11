var usuarios = [];

angular.module('starter.controllers', [])

  .controller('UsuariosCtrl', function($scope, $http){

  $scope.title = 'holaaaaaaaaaaa';
  $http.get('http://127.0.0.2/index.php/usuarios')
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

.controller('infoCtrl', function($scope, $state){
  $scope.idEmpresa = $state.params.strIdEmpresa;
  $scope.usuario = obtenerUsurio($scope.idEmpresa);
  console.log($scope.usuario);
})

function obtenerUsurio(idEmpresa){
  for(var i = 0 ; i < usuarios.length; i++)
  {
    if(idEmpresa === usuarios[i].strIdEmpresa)
    {
      return usuarios[i];
    }
  }
};

