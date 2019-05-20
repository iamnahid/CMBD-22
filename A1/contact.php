<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Jura|PT+Serif|Karla|Oxygen|Staatliches|Viga|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/header.css">
        <link rel="stylesheet" href="./assets/css/contact.css">
        <link rel="stylesheet" href="./assets/css/contents.css">    
        <link rel="stylesheet" href="./assets/css/footer.css">
    </head>
    <body>
        <?php include("./assets/header.php") ?>
        
        <div class="cont-form">
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Me</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. I will come back to you within
                    a matter of hours to help you.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="message">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                        </form>

                        <div class="text-center text-md-left">
                            <a class="btn btn-primary disabled" onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Sec: 4, Uttara, DHaka-1230, Bangladesh</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 880 176 *** *** *</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>iamnahid.n9@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

                </section>
                        <!--Section: Contact v.2-->
        </div>
        <!--Section: Contact v.2-->
        

    <br><br>
        <?php include("./assets/footer.php") ?>

    </body>
</html>