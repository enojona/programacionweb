/** JSON es un conjunto de parejas atributos y valor a,b  y cada pareja esta separado por comas ; **/

var herramienta={}; 
heramienta.saluda=function(){
	alert("Hola,soy hermienta");

};
herramienta.nombre="toolcito";
herramienta.getNombre=function(){
	alert("soy"+herramienta.nombre);
};
herramienta.input=function(lugar){
$elemento= $("<div>").attr("class";"form-group").append(
	$("<label>").attr({"for":"-","class":"col-sm-2 control-label"}).text("nombre")

		);
$("body").empty().append($elemento);
}