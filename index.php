<html>
  <?php include 'head.php';?>
  <body ng-app="App">
  <div id="sb-site">
    <div class="sb-slidebar sb-left">
  <nav>
    <ul class="sb-menu">
      <li><img src="http://plugins.adchsm.me/slidebars/images/slidebars-logo-white@2x.png" alt="Slidebars" width="118" height="40"></li>
      <li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/">Home</a></li>
      <li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/index.php#download">Download</a></li>
      <li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/usage.php">Usage</a></li>
      <li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/usage.php#api">API</a></li>
      <li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/compatibility.php">Compatibility</a></li>
      <li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/issues.php">Issues</a></li>
      <li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/contact.php">Contact</a></li>
      <li class="sb-close"><a class="github" href="https://github.com/adchsm/Slidebars">Github</a></li>
      <li class="sb-close"><span class="sb-open-right">About the Author</span></li>
      <li class="sb-close"><small>Slidebars © 2014 Adam Smith</small></li>
    </ul>
  </nav>
    </div>
    <div class="sb-slidebar sb-right">
      <!-- Your right Slidebar content. -->
    </div>
    <?php include 'navigation.php';?>
    <div ng-controller="posts" class="post container"></div>
  </div>
  </body>
</html>
<script type="text/javascript">

</script>