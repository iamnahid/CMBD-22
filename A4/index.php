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

    // echo "<pre>";
    // print_r($data);
    
    //------- FREE MEMORY -------
    // mysqli_free_result($res); 


    // ------------------------- Form Data Validation ----------------------------
    $name = $_POST['pName'] ?? "";
    $brand = $_POST['pBrand'] ?? "";
    $pro = $_POST['pPro'] ?? "";
    $ram = $_POST['pRam'] ?? "";
    $display = $_POST['pDisplay'] ?? "";
    $color = $_POST['pColor'] ?? "";
    $price = $_POST['pPrice'] ?? "";
    $sub = ['data' => " "];

    $error = ['nameErr' => '', 'brandErr' => '', 'proErr' => '', 'ramErr' => '', 'disErr' => '', 'colErr' => '', 'priErr' => ''];
    if (isset($_POST['dataSubmit']))
    {
        if (empty($name)){ $error['nameErr'] = "*Enter Name";}
        if (empty($brand)){ $error['brandErr'] = "*Enter Brand";}
        if (empty($pro)){ $error['proErr'] = "*Enter Processor Model";}
        if (empty($ram)){ $error['ramErr'] = "*Enter Ram";}
        if (empty($display)){ $error['disErr'] = "*Enter display";}
        if (empty($color)){ $error['colErr'] = "*Enter Colors";}
        if (empty($price)){ $error['priErr'] = "*Enter Price";}

        $sql = " INSERT INTO `products`(`id`, `name`, `brand`, `processor`, `ram`, `display`, `color`, `price`, `created_at`, `status`) VALUES (NULL, '$name', '$brand', '$pro', '$ram', '$display', '$color', '$price', NOW(), '1')";
        $res = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
        $sub = ['data' => "Data Submitted"];
        mysqli_free_result($res); 
        header("location: card.php");
    }
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
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Form Submit & Upload to Database</h4><br>
                    <form class="form" action="index.php" method="POST">
                        <div class="form-group">
                            <input type="text"class="form-control" name="pName" id="pName" placeholder="Name">
                            <span style="color:red;"><?=$error['nameErr']?></span>
                        </div>

                        <div class="form-group">
                            <select class="btn btn-primary dropdown-toggle" style="width:100%;" aria-labelledby="dropdownMenuButton" id="pBrand" name="pBrand">
                                    <option class="dropdown-item" value=" ">Brands</option>
                                    <option class="dropdown-item" value="ASUS">ASUS</option>
                                    <option class="dropdown-item" value="HP">HP</option>
                                    <option class="dropdown-item" value="DELL">DELL</option>
                                    <option class="dropdown-item" value="LENOVO">LENOVO</option>
                                    <option class="dropdown-item" value="ACER">ACER</option>
                                    <option class="dropdown-item" value="MAC">MAC</option>
                            </select>
                            <span style="color:red;"><?=$error['brandErr']?></span>
                            <br>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="pPro" id="pPro" placeholder="Processor">
                            <span style="color:red;"><?=$error['proErr']?></span>
                        </div>

                        <div class="form-group">
                                <select class="btn btn-primary dropdown-toggle" style="width:100%;" aria-labelledby="dropdownMenuButton" id="pRam" name="pRam">
                                        <option class="dropdown-item" value=" ">Ram</option>
                                        <option class="dropdown-item" value="2">2GB</option>
                                        <option class="dropdown-item" value="4">4GB</option>
                                        <option class="dropdown-item" value="8">8GB</option>
                                        <option class="dropdown-item" value="16">16GB</option>
                                        <option class="dropdown-item" value="32">32GB</option>
                                </select>
                                <span style="color:red;"><?=$error['ramErr']?></span>
                            <br>
                        </div>

                        <div class="form-group">
                            <select class="btn btn-primary dropdown-toggle" style="width:100%;" aria-labelledby="dropdownMenuButton" id="pDisplay" name="pDisplay">
                                <option class="dropdown-item" value=" ">Display Sizes</option>
                                <option class="dropdown-item" value="14">14.0Inches</option>
                                <option class="dropdown-item" value="15.6">15.6Inches</option>
                                <option class="dropdown-item" value="17">17.Inches</option>
                            </select>
                            <span style="color:red;"><?=$error['disErr']?></span>
                            <br>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="pColor" id="pColor" placeholder="Color">
                            <span style="color:red;"><?=$error['colErr']?></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="pPrice" id="pPrice" placeholder="Price">
                            <span style="color:red;"><?=$error['priErr']?></span>
                        </div>

                        <div class="form-group  text-center">
                            <input type="submit" value="Submit" name="dataSubmit" class="btn btn-primary">
                        </div>   
                    </form>
                    <span style="color: green"><?=$sub["data"]?></span>
                </div>
            </div>
        </div>
    </div>
    <?php include("./assets/footer.php") ?>
</body>
</html>