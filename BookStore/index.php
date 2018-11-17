<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cửa hàng sách</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
    <!-- start Menu -->
    <?php
    include "Include/menu.php";
    ?>   
    <!--End Menu-->
    
     <!-- start Header -->
     <?php
    include "Include/header.php";
    ?>  
    </div> <!-- end of Header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
            <!--Danh Muc -->
          <?php include "Include/danhmuc.php";  ?>
        	
			<!--Ban Chay Nhat -->
            <?php include "Include/banchaynhat.php";  ?>

        </div> <!-- end of content left -->

         
        <div id="templatemo_content_right">
                <!-- menu -->
                <?php include "Include/Products.php";  ?>
                
            <div class="cleaner_with_height">&nbsp;</div>

        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
     <?php include "Include/footer.php";  ?>
        <!-- footer -->

    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
</body>
</html>