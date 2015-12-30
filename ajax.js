// JavaScript Document

// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax() {
	var xmlhttp = false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {

	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}

if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post
function enviarDatosPieza(){

  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');

  //recogemos los valores de los inputs
  modelo = document.nueva_pieza.modelo.value;
  medidas = document.nueva_pieza.medidas.value;
  uso = document.nueva_pieza.uso.value;
  serie = document.nueva_pieza.serie.value;
  color = document.nueva_pieza.color.value;
  aplicacion = document.nueva_pieza.aplicacion.value;
  estilo = document.nueva_pieza.estilo.value;
  imagen = document.nueva_pieza.imagen.value;
  otros = document.nueva_pieza.otros.value;

  //instanciamos el objetoAjax
  ajax=objetoAjax();

  //uso del método POST
  //archivo que realizará la operación
  //registro.php
  ajax.open("POST", "registro.php", true);

  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

	//enviando los valores a registro.php para que inserte los datos
	ajax.send("modelo=" +modelo+ "&medidas=" +medidas+ "&uso=" +uso+ "&serie=" +serie+ "&color=" +color+ "&aplicacion=" +aplicacion+ "&estilo=" +estilo+ "&imagen=" +imagen+ "&otros=" +otros)
}

//función para limpiar los campos
function LimpiarCampos(){
  document.nueva_pieza.modelo.value="";
  document.nueva_pieza.medidas.value="";
  document.nueva_pieza.uso.value="";
  document.nueva_pieza.serie.value="";
  document.nueva_pieza.color.value="";
  document.nueva_pieza.aplicacion.value="";
  document.nueva_pieza.estilo.value="";
  document.nueva_pieza.imagen.value="";
  document.nueva_pieza.otros.value="";
  document.nueva_pieza.nombre.focus();
}
