<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$carros = [
["nombre" => "Carro1", "precio" => 19000],
["nombre" => "Carro2", "precio" => 28000],
["nombre" => "Carro3", "precio" => 30000],
["nombre" => "Carro4", "precio" => 52000],
["nombre" => "Carro5", "precio" => 80000]
    
];

usort($carros, function($Carro1, $Carro2) {
    return $Carro1['precio'] <=> $Carro2['precio'];
});

array_push($carros,
["nombre"=>"Carro6", "precio"=>25000],
["nombre"=>"Carro7", "precio"=>29000]
);

echo "Carros : \n";
foreach ($carros as $carro) {
	echo "<br>Nombre:".$carro['nombre']."<br>Precio:".$carro['precio']."\n";
}

?>
</body>
</html>