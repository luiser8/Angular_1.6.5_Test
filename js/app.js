var app = angular.module('Agendas',[]);
app.controller('UsuariosCtrl', ['$scope', '$http', function($scope,$http) {
      
      getNames();

      function getNames(){
        $http({
          method: 'GET',
          url: 'api/Producto/allProductos.php',       
        }).then( function(response) {
            $scope.usuarios = response.data;
            console.log(response.status);
        });
      }

      $scope.setName = function(nombres){
        $http({
            method: "POST",
            url: 'api/Producto/newProducto.php',  
            data: {
              'name' : nombres.name,
              'last' : nombres.last         
            },
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(data) {
              console.log('Ok');
              getNames();
        }, function(data) { 
              console.log('No');
        });
    }
}]);