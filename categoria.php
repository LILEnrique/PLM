<!DOCTYPE html>
<html lang="en">
<head>
<?php include("header.php") ; ?>
</head>
<body>

<?php
if($_GET["cat"]=="nuevo_orden"){
    
    include("listar.php");
}elseif($_GET["cat"]=="doctrina"){
    echo"Categoria Doctrina";
}
elseif($_GET["cat"]=="israel"){
    echo"Categoria Israel";
}
elseif($_GET["cat"]=="devocional_y_discipulado"){
    echo"Categoria Devocional y discipulado";
}
elseif($_GET["cat"]=="devocional_y_discipulado"){
    echo"Categoria Devocional y discipulado";
}
elseif($_GET["cat"]=="sectas"){
    echo"Categoria Sectas";
}
elseif($_GET["cat"]=="escatologia"){
    echo"Categoria Escatologia";
}

?>
<?php include("footer.php") ; ?>
</body>
</html>