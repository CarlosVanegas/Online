var option = document.getElementsByClassName("item");
for (var i = 0; i < option.length; i++) {
	option[i].addEventListener('click', changeOption, false);
}
document.getElementsByClassName("show-item")[0].style.display = "block";
function changeOption(){
	console.log("This "+this.innerHTML);
	var x =document.getElementsByClassName("show-item");
	document.getElementsByClassName("container-layout-number-users")[0].style.display = "none";
	for (var i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	
	if (this.innerHTML == "<h5>Registrar</h5>") {
       // alert("YES");
		document.getElementsByClassName("show-item")[0].style.display = "block";
		document.getElementsByClassName("container-layout-number-users")[0].style.display = "block";
	}else if (this.innerHTML == "<h5>Buscar</h5>") {
		document.getElementsByClassName("show-item")[1].style.display = "block";
	} else if (this.innerHTML == "Modificar") {
		document.getElementsByClassName("show-item")[2].style.display = "block";
	} else if (this.innerHTML == "<h5>Horario de citas</h5>") {
		document.getElementsByClassName("show-item")[3].style.display = "block";
	} 
}

//Angularjs and jquery.datatable with ui.bootstrap and ui.utils

function get_info(){
	$('#user-1able').DataTable();
}

//setTimeout(function () {
//  $(function () {
//    $('#user-table').DataTable();
//  });
//}, 3000);

//var app=angular.module('formvalid', ['ui.bootstrap','ui.utils']);
//app.controller('validationCtrl', function($scope, $http){
// $http.get('./abc/get_info.php').success(function(data, status, headers, config){
// $scope.data = data;
// });
//});

var app=angular.module('formvalid', ['ui.bootstrap','ui.utils']);
app.controller('validationCtrl', function($scope, $http){
	//$scope.actualizarTabla = function(spice) {
        $http.get('./abc/get_info.php').success(function(data, status, headers, config){
 			$scope.data = data;
        });
        
    //};
});

