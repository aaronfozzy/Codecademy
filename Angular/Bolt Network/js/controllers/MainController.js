app.controller('MainController', ['$scope', function($scope) {
  $scope.program = {
  series: "Sherlock",
  series_img: "https://content.codecademy.com/projects/4/bolt-network-1/img/sherlock.jpg",
  genre: "Crime drama",
  season: 3,
  episode: "The Empty Hearse",
  description: "Two years after his reported Reichenbach Fall demise, Sherlock, who has been cleared of all fraud charges against him, returns with Mycroft's help to a London under threat of terrorist attack. John has moved on and has a girlfriend, Mary Morstan. Sherlock enlists Molly to assist him, but when John is kidnapped by unknown assailants and is rescued by Sherlock and Mary, John returns to help find the terrorists and an underground plot to blow up the Houses of Parliament during an all night sitting on Guy Fawkes Night.",
  datetime: new Date(2014, 11, 31, 21, 00, 00, 00)
}
$scope.anothershow = {
  series: "Peaky Blinders",
  series_img: "https://m.media-amazon.com/images/M/MV5BNGRhMTkyNjgtNTM0NS00MDRkLTg5NDItM2Y4ZTFkZjI2YjU1XkEyXkFqcGdeQXVyNDg4MjkzNDk@._V1_FMjpg_UX1000_.jpg",
  genre: "Crime drama",
  season: 2,
  episode: "2.6",
  description: "As Derby day arrives, Tommy is faced with impossible decisions as he plans to strike back at his enemies and take the family business to another level. Meanwhile, Major Campbell has one final card to play - one that he is certain will bring about Tommy's demise.",
  datetime: new Date(2014, 11, 31, 21, 00, 00, 00)
}
}]);
