<?php
include("config.php");
$ID =$_GET['id'];
$up =mysqli_query($con,"select * from prod where id=$ID");
$data=mysqli_fetch_array($up);




?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Jaro:opsz@6..72&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title > Confirm product purchase </title>
    <style>
        input{
            display: none;
        }
        .xx{
            background-color: coral ;
        }
    </style>
</head>
<body>
    <center>
       <div class="main">
       <form action="insert_card.php" method="post"   >
 <h2>Would you like to confirm the product?</h2>
<input type="text" name="id" value="<?php echo $data['id']     ?>"  >
<input type="text" name="name"  value="<?php echo $data['name']     ?>" >
<input type="text" name="price" value="<?php echo $data['price']     ?>"  >
<button name="add" type="submit" class='xx' > CONFIRM </button>
<br>
<a href="shop.php">Return to the products page</a>
        </form>
       </div>
    </center>
    
</body>
</html>