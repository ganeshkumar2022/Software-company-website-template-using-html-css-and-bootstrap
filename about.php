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
            <h3 class="text-white">About us</h3>
            <p class="text-white"><a href="index.php" class="text-decoration-none text-white">Home</a> / <a href="" class="text-decoration-none text-white">About us</a></p>
        </div>
    </div>
    </div>
    <!-- banner end -->

     <!-- About us content start -->
    <div class="about-us bg-white">
        <div class="container" style="margin-top:120px;margin-bottom:120px;">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
                    <p class="text-secondary">ABOUT US</p>
                    <h3 class="myh5 mt-n3">Welcome to Web Solutions</h3>
                    <p class="lead text-justify" style="font-style:italic;">
                    Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.
                    </p>
                    <p class="text-justify" style="font-size:18px;">
                    Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.
                    </p>
                    <a href="about.php" class="btn btn-warning">View More</a>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <img src="images/about.jpg" style="height:400px;width:100%;">
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