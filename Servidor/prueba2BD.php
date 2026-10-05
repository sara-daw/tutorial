<?php
    $conexion = new mysqli("127.0.0.1","root","","prueba1");
    /*function primeraFila($conexion){
        $resultado = $conexion->query("SELECT * FROM asignatura");
        $fila = $resultado->fetch_array();
        /*foreach ($fila as $registro) {
            echo $registro.' ';
        }
        for($i=0;i<count($fila);$i++){
            echo fila[i].' ';
        }
    }
    primeraFila($conexion);
    echo '<br/>';
    function numeroFilas($conexion){
        $resultado = $conexion->query("SELECT * FROM asignatura");
        $fila = $resultado->num_rows();
        echo $fila;
    }
    numeroFilas($conexion);*/
    function mostrarIndiceYAsignatura($conexion){
        $resultado = $conexion->query("SELECT * FROM asignatura");
        if($resultado->num_rows==0){
            echo 'no hay asignaturas';
        }else{
            while ($fila = $resultado->fetch_array()) {
                echo $fila["codigo"].' '.$fila["color"].' '.$fila["asignatura"].'<br/>';
                
            }
        }


    }
    mostrarIndiceYAsignatura($conexion);
?>