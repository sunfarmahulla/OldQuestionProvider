
<html>
    <head>
        <title>choose branch</title>
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
.select{
    background:transparent;
    opacity: 0.5;
}
.select ol {
    list-style-type: none;
  margin: 0;
  padding: 0;
}
.select ol li{
    font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
  border-bottom: 1px solid #ccc;
}
.select ol li a{
    text-decoration: none;
  color: #000;
  display: block;
  width: 200px;
 
  -webkit-transition: font-size 0.3s ease, background-color 0.3s ease;
  -moz-transition: font-size 0.3s ease, background-color 0.3s ease;
  -o-transition: font-size 0.3s ease, background-color 0.3s ease;
  -ms-transition: font-size 0.3s ease, background-color 0.3s ease;
  transition: font-size 0.3s ease, background-color 0.3s ease;
} 
.select ol li a:hover {
  font-size: 30px;
  background: #f6f6f6;
}
    

        </style>
    </head>
    <body>
        <div class="container demo">
   <div class="content">
      <div id="large-header" class="large-header">
         <canvas id="demo-canvas"></canvas>
         <h1 class="main-title"><span class="thin">SBSSTC PREVIOUS</span> QUESTIONS</h1>
      </div>
   </div>
</div>
    <center> <lable><b><h1 style="color:black; text-transform: uppercase;
   font-size: 4.2em;
   letter-spacing: 0.1em;">Select Your Branch</h1></b></lable></center>
    <center>
        <div class="select">
           
            <ol>
                <li><a href="first year/FY_semester2.php">FIRST YEAR</a></li>
                <li><a href="computerscience.php" style="text-decoration: none;">Computer science</a></li>
                <li><a href="mechanical/mechanical.php">Mechanical</a></li>
                <li><a href="civil/civil.php">Civil</a></li>
                <li><a href="electronics/electronics.php">Electronics</a></li>
                <li><a href="electrical/electrical.php">Electrical</a></li>
                <li><a href="chemical/chemical.php">Chemical</a></li>
                <li><a href="B.arch/b_arch.php">B.Architecture</a></li>
                <li><a href="BCA_MCA/BCA_MCA.php">BCA/MCA</a></li>
                <li><a href="M.tech/mtech_semester1.php" style="background:#00e6b8">M.TECH</a></li>
            </ol>
        </div>
    </center>
      
        <h5><a href="../login.php" style=" text-decoration: none; color:black;
               background-color:red; width:150px; height:20px; right:1000px; float:right;box-shadow: 0 2px 4px rgba(0,0,0,0.6);"><center>Admin login</center></a></h5>
        </body>
</html>

