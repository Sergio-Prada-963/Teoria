<?php 

/////funciones definidas por el usuario
/* bloques de código que se pueden llamar y ejecutar en cualquier parte de un programa para realizar una tarea específica, permiten que el codigo sea modular y reutilizable, permiten que el codigo sea ordenado y mas eficiente */
/* --- funciones que no retornan valor = función de "void" */
declare(strict_types=1);
function sumar(int $numero1 = 0, array $numero2):void{
    echo $numero1 + $numero2;
}
sumar(10, []);
function sumar2(int $numero1 = 0, array $numero2){
    echo $numero1 + $numero2;
}
sumar2(10, []);
/* El constructor declare es usado para fijar directivas de ejecución para un bloque de código */
/* strict_types = 1 ----> afectan los tipos de coerción Cualquier valor que pudiera ser forzado a un int pasaría el tipo de sugerencia, que incluye: un int adecuado (ejemplo: 42 -> 42) un float (ejemplo: 13.1459 -> 13) un bool (ejemplo: true -> 1) */
/* --- funciones que retornan valor */
function usuarioAutenticado(bool $autenticado) : ? string {
    if($autenticado){return "El usuario esta autenticado";}else{return null;};
}
$usuario = usuarioAutenticado(false);
echo $usuario;
/* para indicar el tipo de dato que va a retornar la función se debe utilizar los dos puntos ( : ) seguido de un símbolo de interrogante(?) y el tipo de dato a retornar */
?>