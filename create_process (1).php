<?php
file_put_contents('data/'.$_POST['title'], $_POST['descripton']);
header('Location: /index.php?id='.$POST['title']);
 ?>
