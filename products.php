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
    <title > products </title>
<style>
    h3{
        font-weight: bold;
        font-family: "Cairo", sans-serif;
        color:black;
    }
    .card{
        margin-top: 10px;
        margin-left: 10px ;
        margin-right: 10px;
        float: right ;
    }
    .card-img-top{
        width: 100%;
        height: 160px;

    }
    main{
        width: 50%;
    }
    body{
        background-color: dodgerblue;
    }

</style>

</head>
<body>
    <center>
     <h3>All products available</h3> 
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con ,"SELECT * FROM prod");
    while ($row = mysqli_fetch_array($result)) {
        echo "<center>
            <main>   <div class='card' style='width: 18rem;'>
  <img src='$row[image]' class='card-img-top' >
  <div class='card-body'>           
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='delate.php ? id=$row[id]' class='btn btn-danger'>Delete product</a>
    <a href='update.php ? id=$row[id]' class='btn btn-primary'>Edit product</a>
  </div>
</div>
</main>
        
        </center>";


    }
    
    ?>

 
</body>
</html>