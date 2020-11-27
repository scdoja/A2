var title = document.getElementById("table");
title.innerHTML = "Monthly Site Visitors - ";

/*
var ths = document.getElementsByTagName("th");
var tds = document.getElementsByTagName("td");
var months = ["April", "May", "June", "July", "August", "September"];
var vistors = [38, 14, 26, 30, 12, 28];
for (var i=0; i<vistors.length; i++) {
    tds[i].innerHTML = months[i] + vistors[i];
};
*/

var tds = document.getElementsByTagName("td");
var vistors = [38, 14, 26, 30, 12, 28];
for (var i=0; i<vistors.length; i++) {
    tds[i].innerHTML = vistors[i];
};
