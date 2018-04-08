$(document).ready(main);

var contador = 1 ;

function main(){
    $(".desplegablea").click(function(){
        
		if(contador == 1){
			$(".desplegableb").show();
			contador = 0;
		}
		else{
			$(".desplegableb").hide();
			contador = 1;
		}
		
    });
		
 	
$(".clic1-img").show();	
$(".clic1 a").css({'color':'#fff','border-bottom':'5px solid #fff'});

	$(".clic1").click(function(){
		 $(".clic1-img").show(); 
		 $(".clic2-img,.clic3-img,.clic4-img").hide();
		 $(".clic1 a").css({'color':'#fff','border-bottom':'5px solid #fff'});
		 $(".clic2 a,.clic3 a,.clic4 a").css({'color':'#323232','border-bottom':'0'});
		 });
	$(".clic2").click(function(){
		 $(".clic2-img").show(); 
		 $(".clic1-img,.clic3-img,.clic4-img").hide();
		 $(".clic2 a").css({'color':'#fff','border-bottom':'5px solid #fff'});
		 $(".clic1 a,.clic3 a,.clic4 a").css({'color':'#323232','border-bottom':'0'});
		 });
	$(".clic3").click(function(){
		 $(".clic3-img").show(); 
		 $(".clic1-img,.clic2-img,.clic4-img").hide();
		 $(".clic3 a").css({'color':'#fff','border-bottom':'5px solid #fff'});
		 $(".clic1 a,.clic2 a,.clic4 a").css({'color':'#323232','border-bottom':'0'});
		 });	 
	$(".clic4").click(function(){
		 $(".clic4-img").show(); 
		 $(".clic1-img,.clic2-img,.clic3-img").hide();
		 $(".clic4 a").css({'color':'#fff','border-bottom':'5px solid #fff'});
		 $(".clic1 a,.clic2 a,.clic3 a").css({'color':'#323232','border-bottom':'0'});
		 });  	
};


/*=========================Formulario=========================================*/

function direccionEmail(theElement, nombre_del_elemento )
{
var evaluar = theElement.value;
var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+\.[A-Za-z0-9_.]+[A-za-z]$/;
if (evaluar.length == 1 ) true;;
if (filter.test(evaluar))return true;
else
alert("E-mail incorrecto");
theElement.focus();
return false;
}

	


