app.controller('MainController', ['$scope', function($scope) {
  $scope.today = new Date();

  $scope.appetizers = [
    {
      name: 'Caprese',
      description: 'Mozzarella, tomatoes, basil, balsmaic glaze.',
      price: 4.95
    },
    {
      name: 'Mozzarella Sticks',
      description: 'Served with marinara sauce.',
      price: 3.95
    },
    {
      name: 'Bruschetta',
      description: 'Grilled bread garlic, tomatoes, olive oil.',
      price: 4.95
    }
  ];
  
  $scope.mains = [{
      name: 'Margherita Pizza',
      description: 'Cheese,Tomato,Dough',
      price: 11
    },
    {
      name: 'Sausage Pasta',
      description: 'Served with grated cheese',
      price: 9
    },
    {
      name: 'Sirloin Steak',
      description: 'Served with beef sauuse and fries',
      price: 22
    }];
  
  $scope.extras = [{
      name: 'Fries',
      description: 'Fries',
      price: 1.95
    },
    {
      name: 'Sauce',
      description: 'Sauce',
      price: 3.95
    },
    {
      name: 'Halloumi Sticks',
      description: 'Halloumi Sticks',
      price: 4.95
    }];

}]);
