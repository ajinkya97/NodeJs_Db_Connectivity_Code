<html ng-app="app" ng-controller="cont">
<head>
    <script src="angular.min.js"></script>
</head>
<body>
     <input type=text ng-model="a1" ng-init="a1=''" id="search" placeholder="Search">
    <table>
    <tr>
        <th>FName</th>
        <th>LName</th>
        <th>Email</th>
        <th>ContactNo</th>
        <th>Age</th>
    </tr>
        <tr ng-repeat="x in a | filter:a1">
        <td>{{x.FName}}</td>
        <td>{{x.LName}}</td>
        <td>{{x.Email}}</td>
        <td>{{x.ContactNo}}</td>
        <td>{{x.Age}}</td>
        </tr>
    </table>
</body>
</html>
<script>
var b=angular.module('app',[]);
b.controller('cont',function($scope,$http,$interval){
  $interval(function (){
  $http({
        method:"GET",
        url:"jsondata1.json"
       }).then(function success(response){
              $scope.a=response.data.records;

            },
              function error(response){
              $scope.a=response.statusText;
       });
},1000);
  });
</script>
