app.controller('MainController', ['$scope', function($scope) {
  $scope.exercises = [
    {
      icon: 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/1076/articles/2016/10/woman-pushup-1522242407.jpg',
      name: 'Pushups',
      count: 20
    },
    {
      icon: 'https://www.runtastic.com/blog/wp-content/uploads/2018/07/how-to-squat-common-mistakes-1200x800-1.jpg',
      name: 'Squats',
      count: 15
    },
    {
      icon: 'https://media.gq.com/photos/56d77b169acdcf20275f110f/16:9/w_2560%2Cc_limit/pull-up-chin-up.png',
      name: 'Pullups',
      count: 10
    },
    {
      icon: 'https://media.gq.com/photos/5a70fdbf99f809700b04c113/16:9/w_2560%2Cc_limit/gq-ask-a-trainer.jpg',
      name: 'Rows',
      count: 10
    },
    {
      icon: 'https://www.spotebi.com/wp-content/uploads/2014/10/lunges-exercise-illustration.jpg',
      name: 'Lunges',
      count: 10
    },
    {
      icon: 'https://media4.popsugar-assets.com/files/thumbor/616NbLiNsLD5zHqw8IwS6R8NW8k/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2015/08/18/743/n/1922398/b51dabfe_Chair-Step-Ups.jpg',
      name: 'Step Ups',
      count: 10
    },
    {
      icon: 'https://media.istockphoto.com/vectors/woman-who-was-fat-doing-sit-up-on-mat-vector-id848741194?k=20&m=848741194&s=612x612&w=0&h=hsBbQhKpCEhaJUae6ibjEu3TgT78UJNHtsAgNDagkW0=',
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
