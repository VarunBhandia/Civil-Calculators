<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Concrete Calculator</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.jpeg" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.jpeg" type="image/x-icon">        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Custom Style Sheet-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

        <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us17.list-manage.com","uuid":"53c3c62743909e39787ac168e","lid":"c854efab19","uniqueMethods":true}) })</script>        <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
        @media (max-width: 768px)
        { #mc_embed_signup input.email{width: 90%;margin-bottom: 5px;}}
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

        </style>   


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106214182-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-106214182-1');
        </script>   
    </head>
    <!--
<script>
var CURR_URL = window.location.hostname;
var WWW_URL = 'https://constructiontips.co.in/concrete-calculator/';
var NON_WWW1='https://constructiontips.co.in';
var NON_WWW2='constructiontips.co.in';

console.log(CURR_URL);
if(CURR_URL==NON_WWW1 || CURR_URL==NON_WWW2){window.location.href = WWW_URL;console.log('CURR_URL');}
</script>
-->
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="https://www.constructiontips.co.in/" style="font-family: raleway;color: white;font-size: 25px;">CONSTRUCTION TIPS</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.constructiontips.co.in/" class="navbar-items">HOME</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle navbar-items" data-toggle="dropdown" href="#">BLOG CATEGORIES<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="navbar-items-dp" href="https://www.constructiontips.co.in/category/civil-engineering/">CIVIL ENGG</a></li>
                                <li><a class="navbar-items-dp" href="https://www.constructiontips.co.in/category/construction/">SITE WORK</a></li>
                                <li><a class="navbar-items-dp" href="https://www.constructiontips.co.in/category/construction-materials/">MATERIALS</a></li>
                                <li><a class="navbar-items-dp" href="https://www.constructiontips.co.in/category/construction-industry/">INDUSTRY</a></li>
                                <li><a class="navbar-items-dp" href="https://www.constructiontips.co.in/category/interior-designing/">INTERIOR </a></li>
                                <li><a class="navbar-items-dp" href="https://www.constructiontips.co.in/category/construction-safety/">SAFETY</a></li>
                                <li><a class="navbar-items-dp" href="https://www.constructiontips.co.in/category/real-estate/">REAL ESTATE</a></li>
                            </ul>
                        </li>                        
                        <li><a href="<?php echo base_url();?>" class="navbar-items active">CONCRETE CALCULATOR</a></li>
                        <li><a href="https://www.constructiontips.co.in/about-us/" class="navbar-items">ABOUT US</a></li>
                        <li><a href="https://www.constructiontips.co.in/contact-us/" class="navbar-items">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>        <!-- Container (About Section) -->
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Concrete Calculator</h2><br>
                    <h4 style="text-align: justify;">
                        The Concrete Calculator estimates the volume and weight of concrete necessary to cover a given area. It also estimates the number of bags of concrete necessary based on standard 60 and 80– pound bags of concrete. Purchasing slightly more concrete than the estimated result can reduce the probability of having insufficient concrete.
                    </h4><br>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-grey">
            <center>
                <h3> Square/ Rectangular Column, Beam, Slab</h3>
            </center>
            <div class="row">
                <div class="col-md-3">
                    <center><img src="<?php echo base_url();?>assets/img/slab.jpg" width="70%"></center>
                </div>
                <div class="col-md-4 col-xs-12" style="margin-bottom: 15px;margin-top: 15px;">
                    <form action="<?php echo base_url();?>Concrete_calculator/insert_slab" method="post" >
                        <div class="row">

                            <div class="col-md-6 col-xs-5">
                                <label>Length (l)</label>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <input type="number" name="length" value="<?php if(isset($concrete_req)){echo $length;} ?>" required style="width:50px;">
                                <select name="length_unit">
                                    <option value="m">metre</option>
                                    <option value="f">feets</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-5">
                                <label>Width (w)</label>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <input type="number" name="width" value="<?php if(isset($concrete_req)){echo $width;} ?>" required style="width:50px;">
                                <select name="width_unit">
                                    <option value="m">metre</option>
                                    <option value="f">feets</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-5">

                                <label>Hieght (h)</label>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <input type="number" name="hieght" value="<?php if(isset($concrete_req)){echo $hieght;} ?>" required style="width:50px;">
                                <select name="hieght_unit">
                                    <option value="m">metre</option>
                                    <option value="f">feets</option>
                                </select>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-5">
                                <label>No. of Columns /Beam/Slab</label>
                            </div>
                            <div class="col-md-4 col-xs-6">

                                <input type="number" name="qty" value="<?php if(isset($concrete_req)){echo $qty;} ?>" required style="width:50px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-5">
                                <label>Mix of concrete (A:B:C) </label>
                            </div>
                            <div class="col-md-5 col-xs-6">
                                <input type="number" name="a" style="width:40px;" value="<?php if(isset($concrete_req)){echo $a;} ?>" required>
                                <input type="number" name="b" style="width:40px;" value="<?php if(isset($concrete_req)){echo $b;} ?>" required>
                                <input type="number" name="c" style="width:40px;" value="<?php if(isset($concrete_req)){echo $c;} ?>" required>
                            </div>
                        </div>
                        <input class="btn btn-default" type="submit" value="Submit" name="submit_slab">
                    </form>
                </div>
                <div class="col-md-5 ">
                    <h4><u>Result</u></h4>
                    <?php
                    if (isset($concrete_req))
                    {
                    ?>
                    <div class="row">
                        <div class="col-md-10 col-xs-12">

                            <table class="table-striped table-bordered">
                                <tr>
                                    <td>Quantity of Concrete Required</td>
                                    <td><b><?php echo round($concrete_req,2); ?></b></td>
                                    <td>m3</td>
                                </tr>
                                <tr>
                                    <td>Quantity of Cement</td>
                                    <td><b><?php echo round($cement,2); ?></b> </td>
                                    <td>Bags</td>
                                </tr>
                                <tr>
                                    <td>Quantity of Fine Aggregate (sand)</td>
                                    <td><b><?php echo round($fine_agg,2); ?></b></td>
                                    <td>m3</td>                                
                                </tr>
                                <tr>
                                    <td>Quantity of Coarse Aggregates (Rodi)</td>
                                    <td><b><?php echo round($course_agg,2); ?></b></td>
                                    <td>m3</td>                                
                                </tr>
                            </table>
                            <a href="<?php echo base_url();?>Concrete_calculator/slab_calc_pdf?concrete_req=<?php echo $concrete_req; ?>&cement=<?php echo $cement; ?>&fine_agg=<?php echo $fine_agg; ?>&course_agg=<?php echo $course_agg; ?>" target="_blank"><b>Download the Result  </b><i class="fa fa-file-pdf-o fa-1x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>

        <div class="container-fluid bg-grey">
            <center>
                <h3>Hole, Column, or Round Footings</h3>
            </center>
            <div class="row">
                <div class="col-md-3">
                    <center><img src="<?php echo base_url();?>assets/img/cylin.jpg" width="70%"></center>
                </div>
                <div class="col-md-4" style="margin-bottom: 15px;margin-top: 15px;">
                    <form action="<?php echo base_url();?>Concrete_calculator/insert_hole" method="post" >
                        <div class="row">

                            <div class="col-md-6 col-xs-5">
                                <label>Diameter (d)</label>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <input type="number" name="diameter" value="<?php if(isset($concrete_req_hole)){echo $diameter;} ?>" required style="width:50px;">
                                <select name="diameter_unit">
                                    <option value="m">metre</option>
                                    <option value="f">feets</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-5">

                                <label>Hieght (h)</label>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <input type="number" name="hieght" value="<?php if(isset($concrete_req_hole)){echo $hieght;} ?>" required style="width:50px;">
                                <select name="hieght_unit">
                                    <option value="m">metre</option>
                                    <option value="f">feets</option>
                                </select>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-5">
                                <label>No. of Columns</label>
                            </div>
                            <div class="col-md-4  col-xs-6">

                                <input type="number" name="qty" value="<?php if(isset($concrete_req_hole)){echo $qty;} ?>" required style="width:50px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-5">
                                <label>Mix of concrete (A:B:C) </label>
                            </div>
                            <div class="col-md-5 col-xs-6">
                                <input type="number" name="a" style="width:40px;" value="<?php if(isset($concrete_req_hole)){echo $a;} ?>" required>
                                <input type="number" name="b" style="width:40px;" value="<?php if(isset($concrete_req_hole)){echo $b;} ?>" required>
                                <input type="number" name="c" style="width:40px;" value="<?php if(isset($concrete_req_hole)){echo $c;} ?>" required>
                            </div>
                        </div>
                        <input class="btn btn-default" type="submit" value="Submit" name="submit_hole">
                    </form>
                </div>
                <div class="col-md-5">
                    <h4><u>Result</u></h4>
                    <?php
                    if (isset($concrete_req_hole))
                    {
                    ?>
                    <div class="row">
                        <div class="col-md-10 col-xs-12">

                            <table class="table-striped table-bordered">
                                <tr>
                                    <td>Quantity of Concrete Required</td>
                                    <td><b><?php echo round($concrete_req_hole,2); ?></b></td>
                                    <td>m3</td>
                                </tr>
                                <tr>
                                    <td>Quantity of Cement</td>
                                    <td><b><?php echo round($cement,2); ?></b> </td>
                                    <td>Bags</td>
                                </tr>
                                <tr>
                                    <td>Quantity of Fine Aggregate (sand)</td>
                                    <td><b><?php echo round($fine_agg,2); ?></b></td>
                                    <td>m3</td>                                
                                </tr>
                                <tr>
                                    <td>Quantity of Coarse Aggregates (Rodi)</td>
                                    <td><b><?php echo round($course_agg,2); ?></b></td>
                                    <td>m3</td>                                
                                </tr>
                            </table>
                            <a href="<?php echo base_url();?>Concrete_calculator/hole_calc_pdf?concrete_req_hole=<?php echo $concrete_req_hole; ?>&cement=<?php echo $cement; ?>&fine_agg=<?php echo $fine_agg; ?>&course_agg=<?php echo $course_agg; ?>" target="_blank"><b>Download the Result  </b><i class="fa fa-file-pdf-o fa-1x" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <br>

        <div id="mc_embed_signup">
            <form action="https://constructiontips.us17.list-manage.com/subscribe/post?u=53c3c62743909e39787ac168e&amp;id=c854efab19" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="mce-EMAIL">Subscribe to our mailing list</label>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required >
                    real people should not fill this in and expect good things - do not remove this or risk form bot signups
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_53c3c62743909e39787ac168e_c854efab19" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="width: 90%;"></div>
                </div>
            </form>
        </div>


        <!--End mc_embed_signup-->
        <!-- Container (Contact Section) -->
        <footer class="container-fluid text-center">
            <center><p>Made with  <i class="fa fa-heart" style="font-size:20px;color:blue"></i>  by <a href="https://www.linkedin.com/in/varunbhandia/" target="_blank"> Varun Bhandia</a></p></center>
        </footer>
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function(){

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });

                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>

    </body>
</html>

