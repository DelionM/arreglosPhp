<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
    padding: 10px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 20px;
    text-align: center;
}
body{
    background: #1e2326;
    color:white;
}
    </style>
    <h2>Arreglos</h2>
    <?php
       // $vegetales = array{
         //   'corn'=> 'yellow',
           // 2600=>'Atari',
            //'Adam'=> 'coleco'
        //};

        //entre corchetes la llave 
        //asort ordenar
        //ordenar inversamente arsort
        //alreves prollave krsort
        //busca po llave aray_key_exist(''zuiza , $capital)
        //llaves los nombres parentesco los valores
        $nombre = [
            // valores          llave
            'Padre' => 'Sealtiel Delion',
            'Madre' => 'Gaudencia Martínez',
            'Hijo' => 'Hernan Delion',
            'Sobrino' => 'Giovanni Delion',
        ];

        print "<h3>Impresion con foreach arreglo completo</h3>";
        foreach ($nombre as $llave => $valor) {
            print ("Nombre $valor el parentesco es $llave");
            print ('<br>');
        }

        //modificar
        print "<h3>modificar</h3>";
        $nombre['sobrino']='Juan';
        foreach ($nombre as $llave => $valor) {
            print ("Nombre $valor el parentesco es $llave");
            print ('<br>');
        }
        //Eliminar
        print "<h3>Eliminar</h3>";
        unset($nombre['Padre']);
        foreach ($nombre as $llave => $valor) {
            print ("Nombre $valor el parentesco es $llave");
            print ('<br>');
        }

        //Orden
        print "<h3>Orden</h3>";
        asort($nombre);
        foreach ($nombre as $llave => $valor) {
            print ("Nombre $valor el parentesco es $llave ");
            print ('<br>');
        }

        //Agregar 
        print "<h3>Agregar</h3>";
        $nombre['sobrino']='Jorge';
        foreach ($nombre as $llave => $valor) {
            print ("Nombre $valor el parentesco es $llave ");
            print ('<br>');
        }

        print "<h3>Busar</h3>";
        if (in_array('Hernan Delion', $nombre)){
            print "<br>El arreglo contiene al sobrino $valor";
        } else
        print("No existe");
        //busquedas

        //function titulo()

    ?>
</body>
</html>