//pour afficher la date et l'heure dans le footer et dans le header
function fonctionTemps(){
	var date = new Date();
	document.getElementById("dateHeureFooter").innerHTML = date;
	n = date.toISOString();
	document.getElementById("dateHeureHeader").innerHTML = 
	n[0] + n[1] + n[2] + n[3] + n[4] + n[5] + n[6] + n[7] + n[8] + n[9] + "&ensp;&ensp;" +
	date.toLocaleTimeString() + ":" + Math.floor(date.getMilliseconds()/100);
	setTimeout("fonctionTemps();", 100);
}