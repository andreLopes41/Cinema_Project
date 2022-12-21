<?php

    if(!empty($_GET['id'])) {
        include_once('dbconfig.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM adm WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {
            $sqlDelete = "DELETE FROM adm WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: admin.php');

?>