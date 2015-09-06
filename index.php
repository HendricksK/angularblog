<html>
  <head>
    <script src="../angularblog/assets/js/angular.min.js"></script>
    <script src="../angularblog/assets/js/kickstart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" src="../angular/assets/css/kickstart.min.css"></link>
  </head>
  <body ng-app>
    <p>This is your first angular expression: {{ 1 + 2 }}</p>

    Enter your name: <input type="text" ng-model="name"></input>
    <p>Hello {{name}}!</p>
  </body>
</html>
