<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

<!-- <script>
$(document).ready(function(){

    $.ajax({url:"http://localhost/project_team/project_team/public/",success:function(result){
        console.log(JSON.stringify(result));
        console.log(result[0].email);
        // text(result[0].email).appendTo(document);
        $("p").text(result[0].email);
    }});
});</script> -->

</head>
<body ng-app="myNoteApp">
<div ng-controller="myNoteCtrl" id ="test1">
    <tr><td>{{ result.email}}</td></tr>
    <tr><td>{{ result.id}}</td></tr>
</div>
<input id ="test" value="<?php echo route('index') ?>" type="hidden">
<script type="text/javascript">
    
    var app = angular.module("myNoteApp", []);
    app.controller("myNoteCtrl", function($scope,$http) {
    $scope.result = {};
    var url = document.getElementById("test").value;
    console.log(url);
    $http.get(url).
      success(function(data, status, headers, config) {
        // this callback will be called asynchronously
        // when the response is available
          $scope.result = data[0];
        console.log($scope.result);
      }).
      error(function(data, status, headers, config) {
        console.log(config);
      });
});
</script>
</body>
</html>
