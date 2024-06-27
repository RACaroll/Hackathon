<?php
                 require('conectar.php');
                 if (!empty($_GET['id']))
                 {
                  $id =$_GET['id'];

                  $sqlSelect = "SELECT = FROM gestor.cadastroaluno WHERE id=&id";
                  $result = $conn->query($sqlSelect);

                  if($result->num_rows > 0)

                  $sqlDelete = "DELETE FROM gestor.deletar WHERE id=$id";
                  $resultDelete = $conn->query($sqlDelete);
                 }
                 ?>

