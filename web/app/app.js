var App = angular.module('App', []);

App.controller('posts', function($scope, $http) {
  $http.get('/angularblog/assets/data/posts.json').then(function(res){
     	var x = 1;
     	for(object in res.data){
     		$('.post').append('<div class="panel panel-default">'+
				'<div class="panel-body">'+
     			'<a href='+res.data[x].href+'?q='+x+'>'+
     			'<img src='+res.data[x].img+'></a>'+
     			'</div></div>');
    		x++;
    	}
    });
});

var Post = angular.module('Post', []);

Post.controller('details', function($scope, $http){
	var data = $('body').data();
	$http.get('/angularblog/assets/data/details.json').then(function(res){
			var x = 1;
			var count = 0;
			for(object in res.data){	
				if(data.id == res.data[x].id){
					$scope.heading = res.data[x].heading;
					$scope.headerimg = res.data[x].headerimg;
					for(img in res.data[x].images){
						$('.article').append('<div class="panel panel-default"><div class="panel-body"><img src='+res.data[x].images[count].img+'><p>'+res.data[x].images[count].info+'</p></div></div>');
						count++;
					}
				}
			x++;
			}
    });
});