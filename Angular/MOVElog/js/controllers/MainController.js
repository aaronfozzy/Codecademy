app.controller('MainController', ['$scope', function($scope) {
  $scope.exercises = [
    {
      icon: 'https://3ada6b6c0c7e4e78ac174a76cce40b3e.cc-propeller.cloud/img/pushup.jpg',
      name: 'Pushups',
      count: 20
    },
    {
      icon: 'https://3ada6b6c0c7e4e78ac174a76cce40b3e.cc-propeller.cloud/img/squat.jpg',
      name: 'Squats',
      count: 15
    },
    {
      icon: 'https://3ada6b6c0c7e4e78ac174a76cce40b3e.cc-propeller.cloud/img/pullup.jpg',
      name: 'Pullups',
      count: 10
    },
    {
      icon: 'https://3ada6b6c0c7e4e78ac174a76cce40b3e.cc-propeller.cloud/img/row.jpg',
      name: 'Rows',
      count: 10
    },
    {
      icon: 'https://3ada6b6c0c7e4e78ac174a76cce40b3e.cc-propeller.cloud/img/lunge.jpg',
      name: 'Lunges',
      count: 10
    },
    {
      icon: 'https://3ada6b6c0c7e4e78ac174a76cce40b3e.cc-propeller.cloud/img/situp.jpg',
      name: 'Step Ups',
      count: 10
    },
    {
      icon: 'img/situp.jpg',
      name: 'Sit Ups',
      count: 15
    }
  ];

  $scope.increase = function(index){
    $scope.exercises[index].count += 1;
  };

  $scope.decrease = function(index){
    $scope.exercises[index].count -= 1;
  };

}]);
