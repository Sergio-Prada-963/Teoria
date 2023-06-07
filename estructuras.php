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
$tecnologia = "html";
switch($tecnologia){
    case'php':
        echo "PHP, un Exelente lenguaje de programacion";
        break;
    case 'JavaScript':
        echo "Genial el lenguaje de la web";
        break;
    case 'html':
        echo "Lenguaje de de maquetacion de la pagina web";
        break;
};

//////Estructuras repetitivas 
/* While */
$i = 0;
while ($i<10){
    echo $i . "<br/>";
    $i++;/* incremento */
}
echo "<br/>";
/* do while */
$i = 100;
do{echo $i . "<br/>";$i++;}while($i<10);
/*For Each */
$clientes = array('Pedro','Juan','karen');
foreach($clientes as $cliente):
    echo $cliente."<br/>";
endforeach;
$clientess = [
    'nombre'=> 'Juan',
    'saldo' => 215456310,
    'tipo' => 'premium gold mas plast'
];
foreach($clientess as $key => $valor):
    echo $key." - ".$valor."<br/>";
endforeach;
$productos = [
    [
        'nombre'=> 'Tablet',
        'precio' => 21510,
        'disponible' => true
    ],
    [
        'nombre'=> 'Televisor',
        'precio' => 215454584,
        'disponible' => true
    ],
    [
        'nombre'=> 'Monitor bonito',
        'precio' => 10000000,
        'disponible' => true
    ]
];
foreach($productos as $producto){?>
<li>
    <p>Producto: <?= $producto['nombre'];?></p>
    <p>Precio: <?= "Fue con For Each---> $".$producto['precio'];?></p>
    <p><?= ($producto['disponible'])?'Disponible':'No Disponible';?></p>
</li>    <?php
}
?>