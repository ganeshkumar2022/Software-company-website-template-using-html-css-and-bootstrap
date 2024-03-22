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
.mybgq,.mybgq:hover
{
    background-color:rgb(241,108,13) !important;
    color:white;
}
.myimage234
{
    height:180px;
    width:100%;
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
            <h3 class="text-white">Our Portfolio</h3>
            <p class="text-white"><a href="index.php" class="text-decoration-none text-white">Home</a> / <a href="" class="text-decoration-none text-white">Our Portfolio</a></p>
        </div>
    </div>
    </div>
    <!-- banner end -->

     <!-- About us content start -->
    <div class="about-us bg-light">
        <div class="container" style="margin-top:120px;margin-bottom:50px;">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-secondary text-center">Our Portfolio</h1>
                    <p class="text-center myh5 lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima repudiandae similique rerum vitae vel deserunt quisquam hic recusandae. Voluptates, optio.
                    </p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-12 text-uppercase">
                    <center>
                    <button class="btn mybgq px-3 py-2 button_all">All</button>
                    <button class="btn mybgq px-3 py-2 button_design">Design</button>
                    <button class="btn mybgq px-3 py-2 button_html">Html</button>
                    <button class="btn mybgq px-3 py-2 button_logos">Logos</button>
                    <button class="btn mybgq px-3 py-2 button_mockup">Mock up</button>
                    </center>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container">
                    <div class="row">
                        <div class="col-md-3 mt-2 design">
                            <img src="images/1.jfif" alt="design" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 design">
                            <img src="images/2.jfif" alt="design" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 design">
                            <img src="images/3.jfif" alt="design" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 html">
                            <img src="images/4.jfif" alt="html" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 html">
                            <img src="images/5.png" alt="html" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 logo">
                            <img src="images/6.png" alt="logo" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 logo">
                            <img src="images/7.png" alt="logo" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 logo">
                            <img src="images/8.jfif" alt="logo" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 mockup">
                            <img src="images/9.jfif" alt="mockup" class="myimage234">
                        </div>
                        <div class="col-md-3 mt-2 mockup">
                            <img src="images/10.jfif" alt="mockup" class="myimage234">
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

<script>
    $(document).ready(function(){
        $(".button_all").click(function(){
            $(".design,.html,.logo,.mockup").show("slow");
        });
        $(".button_design").click(function(){
            $(".html,.logo,.mockup").hide("fast");
            $(".design").show("slow");
        });
        $(".button_html").click(function(){
            $(".design,.logo,.mockup").hide("fast");
            $(".html").show("slow");
        });
        $(".button_logos").click(function(){
            $(".html,.design,.mockup").hide("fast");
            $(".logo").show("fast");
        });
        $(".button_mockup").click(function(){
            $(".html,.logo,.design").hide("fast");
            $(".mockup").show("slow");
        });
    });
</script>
</body>
</html>