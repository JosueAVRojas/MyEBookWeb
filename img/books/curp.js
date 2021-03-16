// JavaScript Document
function GeneraCURP( nom, pat, mat, fecha, genero, edo )
{var quitar, nombres, curp;

	nom=nom.toUpperCase();
	pat=pat.toUpperCase();
	mat=mat.toUpperCase();
	genero=genero.toUpperCase();
	
	quitar= new RegExp(/^(DE |DEL |LO |LOS |LA |LAS )+/);
	nombres=new RegExp(/^(MARIA |JOSE )/);
	nom=nom.replace(quitar,'');
	nom=nom.replace(nombres,'');
	nom=nom.replace(quitar,'');
	pat=pat.replace(quitar,'');
	mat=mat.replace(quitar,'');
	if (mat=='') mat='X';
	
	curp  = pat.substring(0,1) + buscaVocal( pat )+ mat.substring(0,1) + nom.substring(0,2);
	curp  = cambiaPalabra( curp );
	curp += fecha.substring(8,10) + fecha.substring(3,5) + fecha.substring(0,2);
	curp += (genero=='M'?'H':'M') + estado( edo );
	curp += buscaConsonante( pat ) + buscaConsonante( mat ) + buscaConsonante( nom ) ;
	curp += fecha.substring(6,8)=='19'?'0':'A';
	curp += ultdig( curp );
	
	return curp;	
}

function buscaVocal( str )
{var vocales='AEIOU';
var i, c;
	for(i=1; i<str.length; i++)	{
		c=str.charAt(i);
		if ( vocales.indexOf(c)>=0 ){
			return c;
		}		
	}
	return 'X';
}

function buscaConsonante( str )
{var vocales='AEIOU Ññ.';
var i, c;
	for(i=1; i<str.length; i++)	{
		c=str.charAt(i);
		if ( vocales.indexOf(c)<0 ){
			return c;
		}		
	}
	return 'X';
}

function cambiaPalabra( str )
{var pal1=new RegExp(/BUEI|BUEY|CACA|CACO|CAGA|CAGO|CAKA|CAKO|COGE|COJA|COJE|COJI|COJO|CULO|FETO|GUEY/);
 var pal2=new RegExp(/JOTO|KACA|KACO|KAGA|KAGO|KOGE|KOJO|KAKA|KULO|LOCA|LOCO|MAME|MAMO|MEAR|MEAS|MEON/);
 var pal3=new RegExp(/MION|MOCO|MULA|PEDA|PEDO|PENE|PUTA|PUTO|QULO|RATA|RUIN/);
 var val;
 
 	str=str.substring(0,4);
	
 	val = pal1.test( str ) || pal2.test( str );
 	val = pal3.test( str ) || val;

	if ( val ) 
		return str.substring(0,1) + 'X' + str.substring(2,4);
		
	return str;
	
}

function estado( edo )
{var edo;
var vestado = new Array ( 'DF','AS','BC','BS','CC','CL','CM','CS','CH','DG','GT','GR','HG','JC','MC','MN',
				'MS','NT','NL','OC','PL','QT','QR','SP','SL','SR','TC','TS','TL','VZ','YN','ZS','NE');	
	return vestado[edo];
}


function tabla(i, x ){
if(i >= '0' && i<= '9') return x-48;
else if (i>= 'A' && i<= 'N') return x-55;
else if (i>= 'O' && i<= 'Z') return x-54;
else return 0;
}

function ultdig( curp ) 
{var i, c, dv = 0;
//en este punto, la variable curp tiene todo excepto el ultimo digito verificador
//ejemplo: JIRA0302024MVZMVNA
	for(i=0; i<curp.length; i++) 
	{
		c=tabla(curp.charAt(i), curp.charCodeAt(i));
		dv += c * (18-i);
	}
	dv%=10;
	return dv==0?0:10-dv;
}
