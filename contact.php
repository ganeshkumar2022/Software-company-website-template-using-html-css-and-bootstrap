<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web solutions</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="style2.css" type="text/css">
<style>
textarea
{
    resize:none;
}
.samosa
{
    background-color:rgb(253,104,2) !important;
}
.mycard3
{
    background-color: rgb(242,243,245);
}
.mica-form input
{
    padding:28px;
    margin:20px 0px;
}
.mica-form label
{
    display:none;
}
</style>
</head>
<body id="sdfgg">

<a href="#sdfgg" class="text-decoration-none mymaaas text-white"><i class="fa-solid fa-chevron-up"></i></a>
    <!-- header start -->
    <div class="calcu">
    <?php
    include("header.php");
    ?>
    <!-- header end -->

    <!-- banner start -->
    <div class="mybanner">
    <div style="background-color:rgba(0,0,0,0.5);" class=" py-4">
        <div class="container py-5">
            <h3 class="text-white">Contact us</h3>
            <p class="text-white"><a href="index.php" class="text-decoration-none text-white">Home</a> / <a href="" class="text-decoration-none text-white">Contact us</a></p>
        </div>
    </div>
    </div>
    <!-- banner end -->

     <!-- About us content start -->
     <div class="about-us">
        <div class="container" style="margin-top:100px;margin-bottom:100px;">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                   <h1 class="text-center">Get in touch</h1>
                   <p class="lead text-secondary mb-5 text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, voluptatem. Laborum ipsum itaque recusandae distinctio corporis inventore libero optio ea.
                   </p>
                   <br>
                   <div class="card mycard3" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off" class="mica-form">
                        <div class="form-group">
                            <label for="email">First name:</label>
                            <input type="text" class="form-control" placeholder="First Name" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Last name:</label>
                            <input type="text" class="form-control" placeholder="Last Name" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Your Email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Phone:</label>
                            <input type="number" class="form-control" placeholder="Your Phone" id="pwd">
                        </div>
                        <div class="form-group">
                        <label for="comment">Description:</label>
                        <textarea class="form-control" rows="5" placeholder="Give us more details" id="comment"></textarea>
                        </div>
                        <button type="submit" class="btn samosa text-white px-5 py-3 mb-3 mt-2">Submit</button>
                        </form>
                    </div>
                   </div>
                   
                </div>

                <div class="col-md-2"></div>
                   <div class="col-md-4 mt-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" >
                        <div class="card-body">
                        <i class="fa-solid fa-location-dot" style="font-size:40px;"></i>
                        <h3 class="my-2 myor myh5">Headquarters</h3>
                        <p>Po box south street somn road chennai<br>vica kio -7234234</p>
                        </div>
                    </div>
                   </div>
                   <div class="col-md-4 mt-5" data-aos="flip-up" data-aos-duration="3000">
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="card-body">
                        <i class="fa-solid fa-envelope" style="font-size:40px;"></i>
                        <h3 class="my-2 myor myh5">Email us</h3>
                        <p>info@webexamplesolutions.com<br>info@examplesolutions.com</p>
                        </div>
                    </div>
                   </div>
                   <div class="col-md-4 mt-5" data-aos="fade-left" data-aos-duration="2000">
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="card-body">
                        <i class="fa-solid fa-headset" style="font-size:40px;"></i>
                        <h3 class="my-2 myor myh5">Call us</h3>
                        <p>+91 87834 23456<br>+91 95341 22222</p>
                        </div>
                    </div>
                   </div>
            </div>
        </div>
    </div>
    <!-- About us content end -->

    <!-- footer content start -->
    <?php
    include("footer.php");
    ?>
    <!-- footer content end -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="script.js"></script>

</body>
</html>