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
            header('locaton:../../login.php');
        }
?>
<?php 

?>
<html>
    <head>
        <style type="text/css">
            .top{
                background-color: gray;
                height: 50px;
            }
            body{
                background-image: url('../hull.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            .list-type2{
width:400px;
margin:0 auto;
}

.list-type2 ol{
counter-reset: li;
list-style: none;
*list-style: decimal;
font-size: 15px;
font-family: 'Raleway', sans-serif;
padding: 0;
margin-bottom: 4em;
}

.list-type2 ol ol{
margin: 0 0 0 2em;
}

.list-type2 a{
position: relative;
display: block;
padding: .4em .4em .4em 2em;
*padding: .4em;
margin: .5em 0;
background: #FC756F;
color: #444;
text-decoration: none;
transition: all .2s ease-in-out;
}
.list-type2 a:hover{
background: #d6d4d4;
text-decoration:none;
transform: scale(1.1);
}

.list-type2 a:before{
content: counter(li);
counter-increment: li;
position: absolute;
left: -1.3em;
top: 50%;
margin-top: -1.3em;
background:#FC756F;
height: 2em;
width: 2em;
line-height: 2em;
border: .3em solid #fff;
text-align: center;
font-weight: bold;
color:#FFF;
}
        </style>
        
    </head>
    <body>
        <div class="top">
            <center>  <h1>Welcome to Admin Dashboard</h1></center>
            <h3><a href="logout.php" style="color: red;text-decoration: none;">Logout</a></h3>
        </div>
    <center>
       <div class="list-type2">
<ol>
    <li><a href="FY_addimagefile_1.php">Add Question Of Semester 1</a></li>
   

</ol>
</div>
    </center>
    </body>
</html>