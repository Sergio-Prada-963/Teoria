<?php 
//estructura de control 
/* condicional if -  es una estructura de control que permite tomar decisiones en función de si se cumple o no una determinada condición */
$autenticado = true;
$admin = false;
if($autenticado && $admin){
    echo "Usuario autenticado Correctamente";
}else{echo "Usuario no autenticado, inicia sesion";};
/* if anidado...... */
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0000,
    'informacion' => [
        'tipo' => 'Regular'
    ]
    ];echo "<br/>";
    if(!empty($cliente)){
        echo "El arreglo del cliente no esta vacio";echo "<br/>";
        if($cliente['saldo'] > 0){
            echo "El cliente SI tiene saldo disponible";echo "<br/>";
        }else{echo "No hay saldo";};
    }
    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo";echo "<br/>";
    }elseif($cliente['informacion']['tipo'] === 'premium'){
        echo "El cliente es Premium";echo "<br/>";
    }else{echo "No hay cliente definido o no tiene saldo o no es premium";echo "<br/>";};
/*  es una estructura de control que permite tomar decisiones en función de si se cumple o no una determinada condición */

?>