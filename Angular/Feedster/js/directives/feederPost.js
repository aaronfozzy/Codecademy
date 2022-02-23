app.directive('feedsterPost', function() {
    return {
        restict: 'E',
        scope: {
            post: '='
        },
        templateUrl: 'js/directives/feedsterPost.html'
    };
});
