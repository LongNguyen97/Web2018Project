<?php
    $obj =new PDO('mysql:host=localhost;dbname=dbbansach','root','');
    $obj->query('set names "utf8"');
    $sql="select sach.tensach from lichsudg join sach on lichsuDG.masach = sach.masach ORDER BY lichsuDG.soluong desc  limit 5";
    $data=$obj->query($sql);
    $cats=$data->fetchAll();
?>

<div class="templatemo_content_left_section">
            	<h1>Sách Bán Chạy Nhất</h1>
                <ul>
                    <?php
                    foreach ($cats as $v) {
                        ?>
                        <li><a href="#"><?php echo $v['tensach']; ?></a></li>
                        <?php
                    }
                    ?>
            	</ul>
            </div>
        