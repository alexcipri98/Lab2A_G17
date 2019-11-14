function verMasopciones(mail){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function()
	{
		if (XMLHttpRequestObject.readyState==4)
		{
			var obj = document.getElementById('visualizar');
			obj.innerHTML = XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET",'Menus2.php?email=mail');
	XMLHttpRequestObject.send(null);
}