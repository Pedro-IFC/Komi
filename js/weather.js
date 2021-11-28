	function UcFirst(str){
		return (str[0].toUpperCase() + str.substr(1))
	}	
	
	var climaTag= document.querySelector(".clima");
	var tempTag= document.querySelector(".temperatura");
	fetch('http://api.openweathermap.org/data/2.5/weather?q=Rio%20do%20Sul&appid=917700fd8cd6cd576ae25c0ea8ea95e7')
	.then(response => response.json())
	.then(data => {
		var clima = data['weather'][0]['description']
		var temperaturaK = data['main']['temp']
		var temperaturaC = temperaturaK - 273.15  
		climaTag.innerHTML=UcFirst(clima)
		tempTag.innerHTML=Math.trunc(temperaturaC) + " °C"
	})