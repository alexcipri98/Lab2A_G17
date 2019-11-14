function verDatos(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function()
	{
		if (XMLHttpRequestObject.readyState==4)
		{
			var obj = document.getElementById('visualizar');
			obj.innerHTML = XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET",'ShowTable.php');
	XMLHttpRequestObject.send(null);
}
