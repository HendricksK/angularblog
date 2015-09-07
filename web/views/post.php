<html>
 <?php include('head.php');
  echo '<body ng-app="Post" ng-controller="details" data-id="'.$_GET['q'].'">';?>
  <div class="container">
    <img ng-src={{headerimg}}>
    <h1>{{heading}}</h1>
  </div>  
  </body>
</html>
