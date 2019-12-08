<?php
$filename = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmpname'];
if (isset($_FILES['file'])) {
    move_uploaded_file($tmp, "images/" . $filename);
    echo "Sukces!";
    exit(0);
}
?>
<html>
    <head></head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" />
        </form>
    </body>
</html>