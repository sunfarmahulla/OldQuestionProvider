<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
        if(isset($_SESSION['uid']))
        {
            echo "";
        }
        else{
            header('locaton:../login.php');
        }
?>
<html>
    <head>
        <style type="text/css">
            body{
                background-image: url('hulla.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
            
            
            
            
             input[type=text],input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
   .let {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 50px;
}
 .a{
    background-color: greenyellow;
    height:30px;
    width:150px;
    color:green;
    left:252px;
    float: left;
    
}           
 .leter{
     border-radius: 5px;
    background-color: #f2f2f2;
    padding: 50px;
} 
.leter input[type=submit]{
     width: 100%;
    background-color:red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.leter input[type=submit]:hover{
    background-color: lightcoral;
}                                   
        </style>
        
    </head>
    <body>
        
    <center><h1> ADD QUESTION ON DATABASE</center>
    <form action="me_addimagefile_3.php" method="post" enctype="multipart/form-data">
          <lable>ID no.</lable>
        <input type="number" name="id" placeholder="enter id no."> 
        <br>
         <lable>QUESTION NO.</lable>
        <input type="number" name="question_no" placeholder="enter question no."> 
        
        <br>
        <lable>Year(month)</lable>
        <input type="text" name="year" placeholder="enter question paper year">
        <br>
         <lable>BRANCH</lable>
        <input type="text" name="branch" placeholder="enter branch name">
        <br>
        <lable>SEMESTER</lable>
        <input type="number" name="semester" placeholder="enter which semester">
        <br>
    Subject Name<input type="text" name="name" placeholder="Write Subject Name">
        <br>
        <input type="file" name="file" value="Add Question File">
        <br>
        <input type="submit" name="submit" value="submit">
        </form>
    
    <br><br>
   
    <div class="leter">
        <form action="me_addimagefile_3.php" method="post">
            <lable> <b style="color:red;">WARNING:</b> Are you sure you want to delete data from database</lable>
             <input type="submit" name="delete" value="DELETE">
        </form> 
    </div>
    
    
    <a href="dispaly_data1.php">display questions</a>
    </body>
        
</html>
  <?php
  include ('../../dbcon.php');
  if(isset($_POST['submit']))
  {    $id=$_POST['id'];
       $question=$_POST['question_no'];
      $year=$_POST['year'];
       $branch=$_POST['branch'];
       $semester=$_POST['semester'];
       $name=$_POST['name'];
      $file=$_FILES['file'];
      $filename=$_FILES['file']['name'];
      $tempname=$_FILES['file']['tmp_name'];
      $filesize=$_FILES['file']['size'];
      $file_error=$_FILES['file']['error'];
      $filetype=$_FILES['file']['type'];
      
      $fileExt= explode('.', $filename);
      $fileActualExt= strtolower(end($fileExt));
      
      $allowed=array("jpg","gif","pdf");
      move_uploaded_file($tempname,"image/$filename" );
      if(in_array($fileActualExt, $allowed))
      {
          if($file_error===0)
          {
              if($filesize<5000000000)
              {
                  
                  $filenameNew= uniqid('',TRUE)." .".$fileActualExt;
              }
          }else{
              echo "error occur to upload the file";
          }
      }else{
          echo "not exist file";
      }
      
      $query="INSERT INTO `semester_papers`(`id`, `question_no`, `year`, `branch`, `semesters`, `subject_name`, `image`) VALUES ('$id','$question','$year','$branch','$semester','$name','image/$filename')";
      $query_run= mysqli_query($conn, $query);
      if($query_run==TRUE)
      {
          echo "data inserted successfully";
          //header()
          
      }
      else{
          echo"error";
      }
  }
  
 
$sql="SELECT * FROM `semester_papers` where branch='mech'";

$query= mysqli_query($conn, $sql);
if($query==TRUE)
{
    echo"successfully fetch";
    
}else
{
    echo "errror";
}
?><html>
    <head></head>
    <body>
<table width="70%" cell padding='5' cell space='5' border='1' style="background-color: #fff;">
    <tr>
        <td><strong>id</strong></td>
        <td><strong>question_no</strong></td>
         <td><strong>Year(month)</strong></td>
        <td><strong>branch</strong></td>
        <td><strong>semesters</strong></td>
        <td><strong>subject_name</strong></td>
        <td><strong>Images</strong></td>
    </tr>
    <?php while ($ros= mysqli_fetch_array($query))
    {
    $id=$ros['id'];
        ?>
    <tr>
        <td><?php echo $ros['id'] ?></td>
        <td><?php echo $ros['question_no'] ?></td>
        <td style="color:red;"><?php echo $ros['year'] ?></td>
        <td><?php echo $ros['branch'] ?></td>
         <td><?php echo $ros['semesters'] ?></td>
        <td><?php echo $ros['subject_name'] ?></td>
        <td><?php echo $ros['image']?></td>
        
    </tr>
  <?php  } ?>
</table>
       
    </body>
</html>
<?php
if(isset($_POST['delete']))
{
   
    
    $sql="DELETE FROM `semester_papers`";
    $sql_run= mysqli_query($conn, $sql);
    if($sql_run)
    {
               echo '<script type="text/javascript">alert("Delete successfully")</script>'; 
    }else
    {
        echo '<script type="text/javascript">alert("Delete failed")</script>';
    }
}