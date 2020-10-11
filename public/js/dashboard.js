function afiseaza(a){
	if (a==1){
		document.getElementById('modal').style = "display:block";
}
else {
	document.getElementById('modal').style = "display:none";
}


function readtext(a){
	if (a==1){
		document.getElementsByClassName('content').style = "overflow:visible";
}
else {
	document.getElementsByClassName('content').style = "overflow:hidden";
}