<?php
 $cats=null;
    if(isset($_GET['idLoai']))
    {
        $temp=$_GET['idLoai'];
        $obj =new PDO('mysql:host=localhost;dbname=dbbansach','root','');
    $obj->query('set names "utf8"');
    $sql="select * from sach where maloai='$temp'";
    $data=$obj->query($sql);
    $cats=$data->fetchAll();

    } 
    else
    {
        echo "not";
    }
?>

        <?php
            foreach ($cats as $k=>$v) {
                # code...
                 $tem=0;
                 $id=$v['masach'];
                $ten=$v['tensach'];
                $tacgia=$v['manxb'];
                $gia=$v['gia'];
               
               
                if($k%2==0)
                {
                    $tem=0;
                }
                else
                    
                    {
                        $tem=1;
                    }

             
                 ?>
                 <div class="templatemo_product_box">
                   <h1><?php echo "$ten"; ?><span>(<?php echo "$tacgia"; ?>)</span></h1>
                    <p class="hoverimage"><img src="images/dac-nhan-tam.jpg" alt="image" /></p>
                        <div class="product_info">
                            <p><?php echo "$ten"; ?> - <?php echo "$tacgia"; ?></p>
                             <h3><?php echo "$gia"; ?></h3>
                            <!-- <div class="buy_now_button"><a href="#">ADD</a></div> -->
                            <input type="button" name="addcart" onclick="btnprocess()">
                         <div class="detail_button"><a href="detail_photo.html">Chi Tiết</a></div>
                     </div>
                       <div class="cleaner">&nbsp;</div>
                 </div>
                
                   
               <?php if($tem==0)
               {

                   echo '<div class="cleaner_with_width"></div>';
                    
               }
               else
               {
                    echo '<div class="cleaner_with_height"></div>';
               }

            }
        ?>
            	
                
                

                
                         
                                                 
            
                
               
                   
                  
                   
                  
                   

                  




