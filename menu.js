var request = new XMLHttpRequest();
// statechange, imgs, childNodes[x](desc2)
request.open("GET", "./menu.xml", false);
request.send();
var xml = request.responseXML;
var foods = xml.getElementsByTagName("food");
for(var i = 0; i < foods.length; i++) {
	var food = foods[i];
	var names = food.getElementsByTagName("name");
	var descs = food.getElementsByTagName("description");
	for(var j = 0; j < names.length; j++) {
		document.write("<h1 style='margin-top:" + j + "em'>" + names[j].textContent + "</h1>");
		document.write("<h3>" + descs[j].childNodes[0].nodeValue + "</h3>");
	}
}
