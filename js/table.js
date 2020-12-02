var title = document.getElementById("table");
title.innerHTML = "Monthly Site Visitors";

var ths = document.getElementsByTagName("th");
var months = ["April:", "May:", "June:", "July:", "August:", "September:"];
for (var i=0; i<months.length; i++) {
    ths[i].innerHTML = months[i];
};

var tds = document.getElementsByTagName("td");
var vistors = [38, 14, 26, 34, 24, 28];
for (var i=0; i<vistors.length; i++) {
    tds[i].innerHTML = vistors[i];
};
