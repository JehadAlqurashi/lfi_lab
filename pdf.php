<?php
$flag= "RmxhZ3tUaGlzX2lzX2xpZmVfbWFuX2JldHRlcl90aGFuX2N1cmlzZX0K";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $tmp_name = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp_name,"file/" . $_FILES['file']['name']);
    echo "Upload Success";
    ?>

    "<a href='<?php echo "file/" . $_FILES['file']['name'] ?>'>file</a>"

    <?php

}

?>



<form action="" method="post" enctype="multipart/form-data" style="padding: 10px">
    <h6>Ex:txt,doc,pdf,jpg</h6>
    <input type="file" name="file">
    <input type="submit">


</form>
