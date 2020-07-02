<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<link rel="stylesheet" href="assets/style.css" />

<body ng-app="sumod">
<p><a href="/angular_controllers">Homepage</a></p>

<a href="#!name">Name</a>
<a href="#!about">About</a>
<a href="#!contact">Contact</a>
<div class="ng-view"></div><br>

<div class="values">
    {{$scope.name}}
    {{$scope.email}}
</div>

<script src="app/route.js"></script>
<script src="app/controllers/newController.js"></script>

<footer>Click on the links</footer>
</body>
</html>
