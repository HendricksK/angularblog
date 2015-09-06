var App = angular.module('App', []);

App.controller('posts', function($scope, $http) {
  $http.get('/angularblog/assets/data/posts.json').then(function(res){
     	var x = 1;
     	for(object in res.data){
     		$('.post-container').append('<a href='+res.data[x].href+'><img src='+res.data[x].img+'></a>');
    		x++;
    	}
    });
});

/*angular.element(document).ready(function () {
    console.log('page loading completed');
    
});

funtion(){
 
}*/