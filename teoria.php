<?php 
//isset() y empty()
$unaVariable = "Hi";
if(isset($unaVariable)){
    echo "la variable esta definida y tiene un valor". "<br/>";
}else{ echo "La variable no esta definida o no tiene valor";};
$unaVariable2 = "";
if(isset($unaVariable2)){
    echo "la variable esta vacia o no esta definida". "<br/>";
}else{ echo "La variable no tiene valor";}
/* ejemplo co arrays */
$clientes1 = [];
$clientes2 = array();
$clientes3 = array('Pedro','Juan','karen');
$cliente4 = [
    'nombre'=> 'Juan',
    'saldo' => 215456310
];
/* empty - revisa si el arreglo esta vacio */
var_dump(empty($clientes1));
var_dump(empty($clientes2));
var_dump(empty($clientes3));echo "<br/>";
/* isset - revisa si esta creado o esta definido */
var_dump(isset($clientes4));
var_dump(isset($clientes1));
var_dump(isset($clientes2));
var_dump(isset($clientes3));echo "<br/>";
/* isset - permite revisar si una propiedad de un arreglo asociativo existe */
var_dump(isset($cliente4['nombre']));
var_dump(isset($cliente4['codigo']));echo "<br/>";
/* in_array - buscar elementos en un arreglo */
var_dump(in_array('Juan', $clientes3));echo "<br/>";



?>