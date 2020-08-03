<?php
include('../../connect.php');

// INS | UDT | DLT

$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
}

if ($i == 'DLT') {    
    $sql="
    UPDATE `editorial` SET
    `estado` = 'I'
    WHERE `ideditorial` = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../../manage-books.php?s=".$msj);
}

if ($i == 'UDT'){
    $msj='';
    $titulo     =$_POST['titulo'];
    $isbn       =$_POST['isbn'];
    $descripcion=$_POST['descripcion'];
    $year       =$_POST['year'];
    $categoria  =$_POST['categoria'];
    $autor      =$_POST['autor'];
    $editorial  =$_POST['editorial'];
    $estado     = $_POST['estado'];
    $portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
    $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
    $sql="
    UPDATE `libro` 
    SET 
    
    `titulo` ='$titulo',
    `isbn` ='$isbn',
    `descripcion` ='$descripcion',
    `year` ='$year',
    `autor` ='$autor',
    `categoria`='$categoria',
    `editorial` ='$editorial',
    `portada`='$portada',
    `pdflibro` ='$archivo',
    `estado` ='$estado'
    WHERE idlibro = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }

    header("Location: ../../manage-books.php?s=".$msj);
}

if ($i == 'INS'){ 
    $msj='';
    $titulo     =$_POST['titulo'];
    $isbn       =$_POST['isbn'];
    $descripcion=$_POST['descripcion'];
    $year       =$_POST['year'];
    $categoria  =$_POST['categoria'];
    $autor      =$_POST['autor'];
    $editorial  =$_POST['editorial'];
    $portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
    $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
    $sql="
        INSERT INTO `libro`
        (
            `titulo`,
            `isbn`,
            `descripcion`,
            `year`,
            `autor`,
            `categoria`,
            `editorial`,
            `portada`,
            `pdflibro`,
            `estado`
        ) VALUES (
            '$titulo',
            '$isbn',
            '$descripcion',
            '$year',
            '$autor',
            '$categoria',
            '$editorial',
            '$portada',
            '$archivo',
            'A'
        ) 
    ";

    if ($conexion->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }
    
    header("Location: ../../manage-books.php?s=".$msj);
}

?>