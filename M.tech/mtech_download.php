<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('../../dbcon.php');
$id=$_GET['id'];
$query="SELECT * FROM `semester_papers` WHERE id='$id'";
$query1= mysqli_query($conn, $query);
while($ros= mysqli_fetch_array($query1))
{
    $path=$ros['image'];
    header('content-disposition:attachment; filename='.$path.'');
    header('content-Type:application/octent-strem');
    header('content-Type: application/pdf');
        header('content-Type: application/png');
 header('Content-Disposition: inline; filename='.$path.'');
    header('content-Type: application/jpg');
    header('content-length='.filesize($path));
    readfile($path);
}

