<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Jaro:opsz@6..72&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Shope online</title>
    <!-- <style>
h1{
    position:static;
    margin: auto;
    margin: 20rem;
    margin-left: 35rem;
}

    </style> -->
</head>
<body>
    <?php
    include ("config.php");
    $ID=$_GET['id'];
     $up =mysqli_query($con,"select * from prod where id=$ID");
    $data=mysqli_fetch_array($up);
    ?>
    <center>
<div class="main">
    <form action="up.php"  method ="post" enctype="multipart/form-data"   >
<h1>Update Products</h1>
<input type="text" name="id" value="<?php echo $data['id']?>"   >
<br>
<input type="text" name="name" value="<?php echo $data['name']?>"    >
<br>
<input type="price" name="price" value="<?php echo $data['price']?>"  >
<br>
<input type="file" id="file"  name="image"style = "display:none";  >
<label for="file"> update photo</label>
<button name="update" type="submit" >Edit the product</button>
<br><br>
<a href="products.php"> < show all products  > </show></a>  
    </form>
</div>
<p>Developed By Etman</p>
    </center>
</body>
</html>