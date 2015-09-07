<html>
 <?php include('head.php');
  echo '<body class="Post" ng-app="Post" ng-controller="details" data-id="'.$_GET['q'].'">';?>
  <?php include 'navigation.php';?>
  <div class="container">
	<img ng-src={{headerimg}}>
	<div class="header">
		<h1>{{heading}}</h1>
	</div>
	<div class="article">

	</div>
  </div>  
  </body>
</html>
