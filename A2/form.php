<?php
    //print_r($_POST);
    $name = $_POST['pName'] ?? "";
    $age = $_POST['pAge'] ?? "";
    $gender = $_POST['pGender'] ?? "";
    $job = $_POST['pJob'] ?? "";
    $sub = ['data' => " "];

    $error = ['nameErr' => '', 'ageErr' => '', 'genErr' => '', 'jobErr' => '',];
    if (isset($_POST['dataSubmit']))
    {
        if (empty($name)){ $error['nameErr'] = "*Enter Name";}
        if (empty($age)){ $error['ageErr'] = "*Enter Age";}
        if (empty($gender)){ $error['genErr'] = "*Enter Gender";}
        if (empty($job)){ $error['jobErr'] = "*Enter Job";}

        $sub = ['data' => "***Data Submitted"];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|PT+Serif|Karla|Oxygen|Staatliches|Viga|Jura|ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>
<body>
    <?php include("./assets/header.php") ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="title">Form Submit, Value Retrive, Error Optimizing</h4><br>
                <form class="form" action="form.php" method="POST">
                    <div class="form-group">
                        <label for="name" name="lname" id="lname">Full Name</label>
                        <input type="text"class="form-control" name="pName" id="pName" value='<?=$name ?? " "?>'>
                        <span style="color:red;"><?=$error['nameErr']?></span>
                    </div>

                    <div class="form-group">
                        <label for="name" name="lage" id="lage">Age</label>
                        <input type="text" class="form-control" name="pAge" id="pAge" value='<?=$age ?? " "?>'>
                        <span style="color:red;"><?=$error['ageErr']?></span>
                    </div>

                    <div class="form-group">
                        <label for="name" name="lgender" id="lgender">Gender</label>
                        <input type="text" class="form-control" name="pGender" id="pGender" value='<?=$gender ?? " "?>'>
                        <span style="color:red;"><?=$error['genErr']?></span>
                    </div>

                    <div class="form-group">
                        <label for="name" name="ljob" id="ljob">Job</label>
                        <input type="text" class="form-control" name="pJob" id="pJob" value='<?=$job ?? " "?>'>
                        <span style="color:red;"><?=$error['jobErr']?></span>
                    </div>

                    <div class="form-group  text-center">
                        <input type="submit" value="Submit" name="dataSubmit" id=class="btn btn-primary">
                    </div>   
                </form>
                <span style="color: green"><?=$sub["data"]?></span>
            </div>

            <div class="details" id="details">
                <h4 style="text-align:center">Details</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Name:    <?="<p style='color: lightgreen;'>".$name."</p>"?></h6>
                            <h6>Age:   <?="<p style='color: lightgreen;'>".$age."</p>"?></h6>
                            <h6>Gender:   <?="<p style='color: lightgreen;'>".$gender."</p>"?></h6>
                            <h6>Job:   <?="<p style='color: lightgreen;'>".$job."</p>"?></h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php include("./assets/footer.php") ?>
</body>
</html>