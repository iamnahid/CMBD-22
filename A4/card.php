<?php
        
    // ======================= Database Connection ==============================

    $host = 'localhost';
    $user = 'id9537089_iamnahid9';
    $pass = 'iamNahid@5090';
    $dbName = 'id9537089_cmbd22_29';

    $conn = mysqli_connect($host, $user, $pass, $dbName);
    if ( !$conn )
    {
        echo "Connect".mysqli_connect_error();
    }

    $sql = "SELECT * from `products`";
    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($data);
    
    //------- FREE MEMORY -------
    mysqli_free_result($res); 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|PT+Serif|Karla|Oxygen|Staatliches|Viga|Jura|ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom CSS's -->
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>
<body>
    <?php include("./assets/header.php") ?>
    <br><br>
    <div class="cardContent">
        <div class="container">
            <div class="row">
                <?php foreach ( $data as $products) { ?>
                <div class="col-md-3">
                    <div class="card" id="card" style="position: relative;top: 5%; width: 16.5rem;">
                        <img class="card-img-top" src="./assets/img/razerblade.jpg" alt="Card image cap">    
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"><?=$products['brand']?></h5><br>
                            <p class="card-text" style="text-align: left;"> <?=$products['brand']." ".$products['name']." ".$products['processor']." ".$products['ram']."GB  Display:".$products['display']." Color:  ".$products['color']?></p>
                            <p class="card-text" style="text-align: left;">Status:  <?php if($products['status'] === '1'){echo "<label style='color:#87C646'>Active</label>";} else{echo "<label style='color:red'>Inactive</label>";}?></p>
                            <p style="font-weight:bold;color: rgb(39, 130, 228);;" class="card-text">Price: <?=$products['price']?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include("./assets/footer.php") ?>
</body>
</html>