var app = angular.module('myApp', []);

app.controller('voteLandCtrl', function ($scope, $http) {
    $scope.mail = "";
    $scope.mund = "";

    $http.get("http://nowhere.wecupteam8.webcup.fr/index.php/voteLand_Controller/voteLand").then(function (response) {
        $scope.munds = response.data;
    });

    $scope.nouveaumonde = function () {
        if ($scope.mail != "" && $scope.mund != "") {
            $http.get("http://nowhere.wecupteam8.webcup.fr/index.php/voteLand_Controller/add_voteLand?monde=" + $scope.mund).then(function (response) {
                $scope.mail = "";
                $scope.mund = "";
                $scope.munds = response.data;
            });
        }
        //alert("you click newmund : "+$scope.mail + " " + $scope.mund);
    };

    $scope.ajoutervote = function ($id) {
        //alert("you click : " + $id);
        $http.get("http://nowhere.wecupteam8.webcup.fr/index.php/voteLand_Controller/upgrade_voteLand?id=" + $id).then(function (response) {
            $scope.munds = response.data;
        });
    };

});

app.controller('reservationCtrl', function ($scope, $http, $filter, $window) {
    $scope.nom = "azer";
    $scope.prenom = "azer";
    $scope.adresse = "azer@gmail.com";
    $scope.mail = "azer";
    $scope.datedebut = "";
    $scope.datefin = "";
    $scope.nbreplace = 0;



    $scope.reservation = function () {

        //alert("you click newmund : "+$scope.nom + " " + $scope.datedebut);
        //if ($scope.nom != "" && $scope.prenom != "" && $scope.adresse != "" && $scope.mail != "" && $scope.datedebut != "" && $scope.datefin != "" && $scope.nbreplace != "") {
        var parameters = "?nom=" + $scope.nom + "&prenom=" + $scope.prenom + "&adresse=" + $scope.adresse + "&mail=" + $scope.mail
                + "&datedebut=" + $filter('date')($scope.datedebut, 'yyyy/MM/dd') + "&datefin=" + $filter('date')($scope.datefin, 'yyyy/MM/dd') + "&nbreplace=" + $scope.nbreplace;

        $http.get("http://nowhere.wecupteam8.webcup.fr/index.php/reservationBillet_Controller/add_reservationBillet" + parameters).then(function () {
            $window.location.href = '/LinkSky/#/links';
        });
        //}
    };

    $scope.getprix = function () {
        var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds    
        var days = Math.round(Math.abs(($scope.datefin.getTime() - $scope.datedebut.getTime()) / (oneDay)));
        return ($scope.datedebut != null && $scope.datefin != null && $scope.nbreplace != null) ? days * $scope.nbreplace * 1000 : 0;
    };

});