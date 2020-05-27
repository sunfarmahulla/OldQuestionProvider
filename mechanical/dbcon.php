<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn= mysqli_connect('localhost', 'root', '', 'adminpanelonline1');
 if($conn == FALSE)
 {
     echo '<script type="text/javascript">alert("connection is not done")</script>';
     
 }
else
{
   //echo'<script type="text/javascript">alert("connection is done")</script>';
}