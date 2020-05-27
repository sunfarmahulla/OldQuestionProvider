<html>
    <head>
        <title>first year</title>
        <style type="text/css">
            body{
                 background-image: url('gre.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
         .large-header {
   position: relative;
   width: 100%;
   background: #111;
   overflow: hidden;
   background-size: cover;
   background-position: center center;
   z-index: 1;
}

.demo .large-header {
   background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo-bg.jpg");
}

.main-title {
   position: absolute;
   margin: 0;
   padding: 0;
   color: #F9F1E9;
   text-align: center;
   top: 50%;
   left: 50%;
   -webkit-transform: translate3d(-50%, -50%, 0);
   transform: translate3d(-50%, -50%, 0);
}

.demo .main-title {
   text-transform: uppercase;
   font-size: 3.2em;
   letter-spacing: 0.1em;
}

.main-title .thin {
   font-weight: 200;
}

@media only screen and (max-width: 768px) {
   .demo .main-title {
      font-size: 3em;
   }
}
.list-type4{
width:410px;
margin:0 auto;
}

.list-type4 ol{
counter-reset: li;
list-style: none;
*list-style: decimal;
font-size: 15px;
font-family: 'Raleway', sans-serif;
padding: 0;
margin-bottom: 4em;
}
.list-type4 a{
position: relative;
display: block;
padding: .4em .4em .4em 2em;
*padding: .4em;
margin: .5em 0;
background: #5975D9;
color: white;
text-decoration: none;
box-shadow:inset 0.5em 0 black;
-webkit-transition: box-shadow 1s; /* For Safari 3.1 to 6.0 */
transition: box-shadow 1s;
}

.list-type4 a:hover{
box-shadow:inset 2em 0 black;
}



     </style>   
       
        
    </head>
    <body>
        
         <div class="container demo">
   <div class="content">
      <div id="large-header" class="large-header">
         <canvas id="demo-canvas"></canvas>
         <h1 class="main-title"><span class="thin">computer</span>science</h1>
      </div>
   </div>
</div>
    <center> <h1 style="color:black;">Choose Your Semester </h1></center>  
       <div class="list-type4">
<ol>
    <li><a href="FY_semester2.php">semester 1</a></li>
   
   
</ol>
</div> 
        
       
    </body>
</html>