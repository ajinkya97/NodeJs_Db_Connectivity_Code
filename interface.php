<html ng-app="app" ng-controller="cont">
<head>
<link rel="stylesheet" href="interface.css" type="text/css">

<script src="angular.min.js"></script>

</head>
<body>

<input type=text ng-model="a1" ng-init="a1=''" id="search" placeholder="Search">
<div class="tbl-header">
<table cellpadding='0' cellspacing='0' border="0">
   <thead>
    <tr>
        <td>Id</td>
      <td>FName</td>
      <td>LName</td>
      <td>Email</td>
      <td>ContactNo</td>
      <td>Age</td>
    </tr>
   </thead>
</table>
</div>

<div  class='tbl-content'>
<table cellpadding='0' cellspacing='0' border='0'>

<tbody>
<tr ng-repeat="x in a | filter:a1">
    <td>{{x.Id}}</td>
    <td>{{x.FName}}</td>
    <td>{{x.LName}}</td>
    <td>{{x.Email}}</td>
    <td>{{x.ContactNo}}</td>
    <td>{{x.Age}}</td>
</tr>
</tbody>
</table>
</div>
</body>

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
</html>
