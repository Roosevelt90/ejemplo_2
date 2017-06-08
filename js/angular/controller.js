(function () {
  angular.module('prueba.controllers', [])
          .controller('main', ['$scope', function ($scope) {
              $scope.data = [];
              $scope.data.birdtday =  new Date();;
              $scope.flag = true;
              $scope.format = "dd-mm-yyyy";
              $scope.popup1 = {
                opened: false
              };
              $scope.dateselected = function () {
                var o = (new Date($scope.data.birdtday)).getTime() / 1000
//                $scope.convertToDate($scope.data.birdtday);
//                console.log($scope.convertToDate());
                console.log(o);
              }
              $scope.convertToDate = function (stringDate){
  var dateOut = new Date(stringDate);
  dateOut.setDate(dateOut.getDate() + 1);
  console.log(dateOut);
  return dateOut;
};
              $scope.open1 = function () {
                $scope.popup1.opened = true;
              };
              $scope.typeDocument = [{id: 1, name: "Cedula de ciudadania"}, {id: 2, name: "Registro civil"}, {id: 3, name: "Tarjeta de identidad"}, {id: 4, name: "Cedula de extranjeria"}];
            }])
})();