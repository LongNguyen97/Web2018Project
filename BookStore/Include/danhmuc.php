<?php 
$obj =new PDO('mysql:host=localhost;dbname=dbbansach','root','');
$obj->query('set names "utf8"');
$sql="select * from loai";
$data=$obj->query($sql);
$cats=$data->fetchAll();
?>
<div class="templatemo_content_left_section">
            	<h1>Danh Mục</h1>
                <ul>
                <?php
                   foreach ($cats as $car) { 
                        ?>
           <li><a href="index.php?idLoai=<?php echo $car['maloai'];?>"><?php echo $car['tenloai']; ?></a></li>                          
                     <?php         
                   }
                ?>                                 
            	</ul>
            </div>