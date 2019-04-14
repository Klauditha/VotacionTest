function Valida_Rut( Objeto )
{
	var tmpstr = "";
	var intlargo = Objeto.value
	if (intlargo.length> 0)
	{
		crut = Objeto.value
		largo = crut.length;
		if ( largo <2 )
		{
			alert('rut inválido')
			Objeto.focus()
			return false;
		}
		for ( i=0; i <crut.length ; i++ )
		if ( crut.charAt(i) != ' ' && crut.charAt(i) != '.' && crut.charAt(i) != '-' )
		{
			tmpstr = tmpstr + crut.charAt(i);
		}
		rut = tmpstr;
		crut=tmpstr;
		largo = crut.length;
 
		if ( largo> 2 )
			rut = crut.substring(0, largo - 1);
		else
			rut = crut.charAt(0);
 
		dv = crut.charAt(largo-1);
 
		if ( rut == null || dv == null )
		return 0;
 
		var dvr = '0';
		suma = 0;
		mul  = 2;
 
		for (i= rut.length-1 ; i>= 0; i--)
		{
			suma = suma + rut.charAt(i) * mul;
			if (mul == 7)
				mul = 2;
			else
				mul++;
		}
 
		res = suma % 11;
		if (res==1)
			dvr = 'k';
		else if (res==0)
			dvr = '0';
		else
		{
			dvi = 11-res;
			dvr = dvi + "";
		}
 
		if ( dvr != dv.toLowerCase() )
		{
			alert('El Rut Ingresado es Invalido')
			Objeto.focus()
			return false;
		}
		alert('El Rut Ingresado es Correcto!')
		Objeto.focus()
		return true;
	}
}



function camposVacios()
{
    var texto = document.getElementById("txtNombre").value;

    if(texto.length==0  || /^\s+$/.test(texto))
    {
    alert('Favor completar Nombre y Apellidos');
   
    return false;
    }
   
       return true;
}




function validacionAlfaNum () {

 var alias = document.getElementById("txtAlias").value;   
 var validos = " abcdefghijklmnopqrstuvwxyz0123456789";
 var letra;
 var contador= 0;
 var bien = true;
 for (var i=0; i<alias.length; i++) {
    caracter = alias[i];
    if(caracter >= '0')
    {
        contador++;
  letra=alias.charAt(i).toLowerCase()
    }
  if(letra)
  if (validos.indexOf(letra) == -1){bien=false;};
  }
  if(contador > '5')
  { alert("Debe haber al menos 5 caracteres alfanumericos")}
  if (!bien) {
  alert("Error. Caracteres no aceptados");

}

}

function validaRegion(){
	if($("#cmbRegion").val()==0){
	alert("Seleccione region");
	return false;
		}
}


function validaCandidato(){
	if($("#cmbCandidato").val()==0){
	alert("Seleccione Candidato");
	return false;
		}
}

function validaComuna(){
	if($("#cmbComuna").val()==0){
	alert("Seleccione Comuna");
	return false;
		}
}

function validaFormulario(){
	if(!validaComuna()&& !validaCandidato()){
		alert('Formulario incompleto');
	}
	else{
		
	}
}