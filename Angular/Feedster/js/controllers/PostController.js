app.controller('PostController', ['$scope', function($scope) {
  $scope.posts = [
    {
      author: {
        name: 'Calvin Broadus, Jr.',
        avatar: 'https://content.codecademy.com/projects/4/feedster/img/cbj.svg'
      },
      comment: {
        img: 'https://content.codecademy.com/projects/4/feedster/img/cbj.svg',
        text: 'How much for that dogg in the window?'
      }
    },


    {
      author: {
        name: 'Matthew Healy',
        avatar: 'https://content.codecademy.com/projects/4/feedster/img/mh.svg'
      },
      comment: {
        text: 'I used to have a recurring dream when I was younger.'
      }
    }
  ]  
}]);
