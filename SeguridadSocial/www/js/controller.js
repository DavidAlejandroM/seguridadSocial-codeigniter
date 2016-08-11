var usuarios = [];

angular.module('starter.controllers', [])

  .controller('UsuariosCtrl', function($scope, $http){

  $http.get('http://127.0.0.2/index.php/usuarios/obtenerusuarios')
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
  $http.get('http://127.0.0.2/index.php/usuarios/obtenerusuario/'.concat($scope.idEmpresa))
    .success(function(result){
      $scope.usuario = result;
      usuario = $scope.usuario;
      console.log($scope.usuario);
    })
    .error(function(result){
      console.log('algo anda mal' + result);
    })

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

