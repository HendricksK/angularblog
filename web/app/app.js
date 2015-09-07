var App = angular.module('App', []);

App.controller('posts', function($scope, $http) {
  $http.get('/angularblog/assets/data/posts.json').then(function(res){
     	var x = 1;
     	for(object in res.data){
     		$('.post-container').append('<a href='+res.data[x].href+'?q='+x+'><img src='+res.data[x].img+'></a>');
    		x++;
    	}
    });
});

var Post = angular.module('Post', []);

Post.controller('details', function($scope, $http){
	var data = $('body').data();
	$http.get('/angularblog/assets/data/details.json').then(function(res){
			var x = 1;
			for(object in res.data){
				if(data.id == res.data[x].id)
					$scope.heading = res.data[x].heading;
					$scope.headerimg = res.data[x].headerimg;
					//$('.container').append('<img src='+res.data[x].headerimg+'><h1>'+res.data[x].heading+'</h1>');
				x++;
			}
    	});
	});