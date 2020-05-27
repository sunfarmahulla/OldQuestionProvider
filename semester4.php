<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include ('../dbcon.php');
//include('addimagefile.php');
$sql="SELECT * FROM `semester_papers` where branch='cse' AND semesters=4";

$query= mysqli_query($conn, $sql);
if($query==TRUE)
{
    echo" ";
    
}else
{
    echo "errror";
}
?><html>
    <head>
        <style type="text/css">
            body{
                 background-image: url('hulla.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
           
            .table{
                 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.6);
            }
            .table tr th{
                 padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:#1a75ff;
    color: white;
            }
            .table td, .table th {
    border: 1px solid #ddd;
    padding: 8px;
}
.table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}


            
        </style>
    </head>
    <body>
        <div class="header">
            <center><h1 style=" color:black; ">DOWNLOAD QUESTION</h1></center></div>
    <center>
        <div class="table">
<table width="70%" cell padding='5' cell space='5'>
    
    <tr>
        <th style="color:red;"><strong>Year</strong></th>
        <th><strong>Id</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Question</strong></th>
    </tr>
    
    <?php while ($ros= mysqli_fetch_array($query))
    {
    $id=$ros['id'];
        ?>
    <tr id="show">
        <td style="color:red;"><?php echo $ros['year'] ?></td>
        <td><?php echo $ros['question_no'] ?></td>
        <td><?php echo $ros['subject_name'] ?></td>
        <td>  <a href="download3.php?id=<?php echo $id ?>" style="color:red;text-decoration: none;box-shadow:inset 0.5em 0 black;display: block;" ><img width="80px" height="50px" src="pdf.png"/>Download</a></td>
    </tr>
  <?php  } ?>
</table>
        </div>
    </center>
        
    </body>
</html>