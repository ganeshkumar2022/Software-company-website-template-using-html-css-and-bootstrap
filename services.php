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
            <h3 class="text-white">Our Services</h3>
            <p class="text-white"><a href="index.php" class="text-decoration-none text-white">Home</a> / <a href="" class="text-decoration-none text-white">Our Services</a></p>
        </div>
    </div>
    </div>
    <!-- banner end -->

      <!-- our services start -->
      <div class="services" style="margin-top:100px;margin-bottom:100px;">
        <div class="container">
          <h1 class="myh5 text-center">Our Services</h1>
          <h5 class="myh5 text-secondary text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo fugiat neque inventore at commodi. Explicabo doloribus eos ipsam dignissimos vero perferendis, sapiente fugit et. Praesentium, assumenda animi. Incidunt, quod nam?</h5>
          <div class="row my-5">
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="3000">
                <div class="card">
                    <img src="images/web.jpg" class="myima img-top">
                    <div class="card-body">
                        <h4 class="myh5">Web Development</h4>
                        <p class="text-justify text-secondary mytexta">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur praesentium suscipit aliquam quisquam vel perspiciatis at iste cum quasi iusto!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-duration="3000">
                <div class="card">
                    <img src="images/seo.jfif" class="myima img-top">
                    <div class="card-body">
                        <h4 class="myh5">SEO</h4>
                        <p class="text-justify text-secondary mytexta">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur praesentium suscipit aliquam quisquam vel perspiciatis at iste cum quasi iusto!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-duration="3000">
                <div class="card">
                    <img src="images/mobile.jfif" class="myima img-top">
                    <div class="card-body">
                        <h4 class="myh5">Mobile optimization</h4>
                        <p class="text-justify text-secondary mytexta">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur praesentium suscipit aliquam quisquam vel perspiciatis at iste cum quasi iusto!
                        </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <center>
         <a href="portfolio.php" class="btn btn-warning">View our Portfolio</a>
    </center>
    <!-- our services end -->

    <!-- footer content start -->
    <?php
    include("footer.php");
    ?>
    <!-- footer content end -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="script.js"></script>

</body>
</html>