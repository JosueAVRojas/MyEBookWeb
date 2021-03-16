// JavaScript Document
//*************************************************************************************
function btGenCurp( frm, tipoAsp )
{var curp;

	if (!validaNombrePaternoMaterno(frm,tipoAsp)) return;
	if (!validaFechaGeneroEstado(frm,tipoAsp)) return;
	
	curp=GeneraCURP(frm.whNombre.value,frm.whPaterno.value,frm.whMaterno.value,
					frm.whFecNac.value,frm.whGenero.value,frm.whEntNac.value);	
	if ( curp!= 'x' )
	{
		frm.whCurp.value=curp;
		//alert('Verifica que la CURP sea correcta.');
	}
}
//*************************************************************************************

function curp()
{
        var Vcurp = $("#icurp").contents().find("#whCurp").val();
        jQuery("#curp").val(Vcurp);
        var VFecha = $("#icurp").contents().find("#whFecNac").val();
        jQuery("#birth").val(VFecha);

	//alert(mensajeTXT);
}

//*************************************************************************************
function validaNombrePaternoMaterno( frm, tipoAsp )
{
	
	frm.whNombre.value =utrim(frm.whNombre.value);
	frm.whPaterno.value=utrim(frm.whPaterno.value);
	frm.whMaterno.value=utrim(frm.whMaterno.value);
	
	if (tipoAsp!='3') 
		return true;
	if ( !validaNombre(frm.whNombre.value) )
	{
		if(frm.whNombre.value=='')
			alert('Escribe tu nombre por favor');
		else
			alert('El campo nombre solo acepta letras (A-Z), el espacio y el punto.\nNo se aceptan caracteres acentuados ni dieresis.');
		frm.whNombre.focus();
		return false;
	}
	if ( !validaNombre(frm.whPaterno.value) )
	{
		if(frm.whPaterno.value=='')
			alert('Escribe tu apellido paterno por favor.\nSi solo tienes un apellido, escribelo aquí.');
		else
			alert('El campo de apellido paterno solo acepta letras (A-Z), el espacio y el punto.\nNo se aceptan caracteres acentuados ni dieresis.');
		frm.whPaterno.focus();
		return false;
	}
	if ( !validaNombre(frm.whMaterno.value) )
	{
		if(frm.whMaterno.value=='')
		{
			if (confirm('¿Deseas dejar el campo de apellido materno en blanco?'))
				return true;
		}
		else
			alert('El campo apellido materno solo acepta letras (A-Z), el espacio y el punto.\nNo se aceptan caracteres acentuados ni dieresis.');
		frm.whMaterno.focus();
		return false;
	}
    frm.whNombre.focus();
	frm.whNombre.blur();
	return true;
}
//*************************************************************************************
//*************************************************************************************
function validaFechaGeneroEstado( frm, tipoAsp )
{
	frm.whFecNac.value=trim(frm.whFecNac.value);
	
	if ( frm.whFecNac.value=='' ) {
		alert('Debes elegir tu fecha de nacimiento.')
		frm.whFecNac.focus();
		return false;
	}

	if ( frm.whFecNac.value.length!=10) {
		alert('La fecha de nacimiento debe estar en: dd/mm/aaaa')
		frm.whFecNac.focus();
		return false;
	}
	
	if (frm.whGenero.selectedIndex==0) {
		alert('Selecciona tu genero.')
		frm.whGenero.focus();
		return false;
	}
	if ( frm.whEntNac.selectedIndex==0)	{
		alert('Elije tu lugar de nacimiento');
		frm.whEntNac.focus();
		return false;
	}
			frm.whEntNac.blur();
	return true;
}
//*************************************************************************************
//*************************************************************************************
function validaNombre( cmp )
{var c, i;
	cmp=trim(cmp)
	if ( cmp.length==0 ) return false;
	for (i=0; i<cmp.length; i++)
	{
		c=cmp.charAt(i);
		if ( !( ( 'A'<=c && c<='Z' ) || c=='Ñ' || c=='.' || c==' ' ) )
			return false;
	}
	return true;	
}
