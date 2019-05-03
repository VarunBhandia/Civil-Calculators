<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Concrete Calculator</title>

        <meta charset="utf-8">
        <meta property="og:image" content="<?php echo base_url();?>assets/img/concrete-calculator-featured.jpg">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1024">
        <meta property="og:image:height" content="1024">       
        <meta name="description" content=" Calculate the Quantity of Concrete, Cement, Sand & Coarse Aggregate with the help of our Concrete Calculator.">
        <meta name="keywords" content=" Calculate the Quantity of Concrete, Cement, Sand & Coarse Aggregate with the help of our Concrete Calculator.">
        <meta name="author" content="Varun Bhandia">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.jpeg" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.jpeg" type="image/x-icon">        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <!--        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

        <div id="" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Concrete Calculator</h2>
                </div>
            </div>
        </div>
        
        <div class="container-fluid bg-grey">
            <center>
                <h3>Square/ Rectangular Column, Beam, Slab</h3>
            </center>
            <div class="row">
                <div class="col-md-3">
                    <center><img src="<?php echo base_url();?>assets/img/slab.jpg" width="70%"></center>
                </div>
                <div class="col-md-5" style="margin-bottom: 15px;margin-top: 15px;">
                    <form action="<?php echo base_url();?>Concrete_calculator/insert_slab" method="post" >
                        <div class="row">

                            <div class="col-md-6 col-xs-5">
                                <label>Length (l)</label>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <input type="number" name="length" value="<?php if(isset($concrete_req)){echo $length;} ?>" required style="width:40px;">
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
                                <input type="number" name="width" value="<?php if(isset($concrete_req)){echo $width;} ?>" required style="width:40px;">
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
                                <input type="number" name="hieght" value="<?php if(isset($concrete_req)){echo $hieght;} ?>" required style="width:40px;">
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

                                <input type="number" name="qty" value="<?php if(isset($concrete_req)){echo $qty;} ?>" required style="width:40px;">
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
                        <?php if (isset($concrete_req))
{?> <a href="<?php echo base_url();?>"><input class="btn btn-default" value="Reset"></a> <?php } else{?> <input class="btn btn-default" type="submit" value="Submit" name="submit_slab"> <?php } ?>

                    </form>
                </div>
                <div class="col-md-4">
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
                <h3>Hole, Circular Column, or Round Footings</h3>
            </center>
            <div class="row">
                <div class="col-md-3">
                    <center><img src="<?php echo base_url();?>assets/img/cylin.jpg" width="70%"></center>
                </div>
                <div class="col-md-5" style="margin-bottom: 15px;margin-top: 15px;">
                    <form action="<?php echo base_url();?>Concrete_calculator/insert_hole" method="post" >
                        <div class="row">

                            <div class="col-md-6 col-xs-5">
                                <label>Diameter (d)</label>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <input type="number" name="diameter" value="<?php if(isset($concrete_req_hole)){echo $diameter;} ?>" required style="width:40px;">
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
                                <input type="number" name="hieght" value="<?php if(isset($concrete_req_hole)){echo $hieght;} ?>" required style="width:40px;">
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

                                <input type="number" name="qty" value="<?php if(isset($concrete_req_hole)){echo $qty;} ?>" required style="width:40px;">
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
                        <?php if (isset($concrete_req_hole))
{?> <a href="<?php echo base_url();?>"><input class="btn btn-default" value="Reset"></a> <?php } else{?> <input class="btn btn-default" type="submit" value="Submit" name="submit_hole"> <?php } ?>
                    </form>
                </div>
                <div class="col-md-4">
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
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Concrete Calculator</h2>
                    <h4 style="text-align: justify;">
                        There are two words concrete and calculator which make the word <b>“Concrete Calculator”</b>. Before finding the value of Concrete required using our concrete calculator, you need to know some basics of Construction.
                    </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Table of Content</h2>
                    <h4 style="text-align: justify;">
                        <ul>

                            <li>What is Concrete?</li>
                            <li>Different Types of Concrete</li>
                            <li>Advantages of Concrete</li>
                            <li>Why Measuring the Amount of Concrete Required is Important?</li>
                            <li>Pre-Requisites</li>
                            <li>Some Important Formulas for different Concrete forms</li>
                            <li>How to calculate concrete?</li>
                            <li>Ready-Mix vs. Bagged Concrete</li>
                            <li>What is Concrete Calculator?</li></ul>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>What is concrete?</h2>
                    <h4 style="text-align: justify;">
                        <p>The Concrete is a building material mostly used nowadays for the construction activities. Concrete is made by using ingredients like Cement, Sand, Aggregates, Water & Admixtures. 
                            “Concrete has become the first choice of designers when it comes to design any modern day structures."</p>
                        <p>Concrete is most of the cases is Portland cement concrete that is a composite material composed of fine and coarse aggregate bonded together with fluid cement (paste of cement).  </p>
                        <p>There are many types of cement, Portland cement is one of the most commonly used cement and is an ingredient in concrete, mortar, and plasters. </p>
                        <p>We can purchase concrete in multiple forms, including in 60 or 80-pound bags, or delivered in large amounts by specialized concrete mixer trucks.  </p>
                        <p>It is essential to mix it properly for the production of strong, uniform concrete as it involves mixing water, aggregate, cement, and any desired additives and should place before it gets hard. </p>
                        <p>The concrete is even designed to harden more quickly for applications that require rapid set time. </p>
                        <p>A slow process of concrete hardening once it has been placed is called curing, this process typically takes concrete around four weeks to reach over 90% of its final strength. </p>
                        <p>During the early stages of curing the concrete is damp and we can increase the strength of the concrete through techniques such as spraying concrete slabs with compounds that create a film over the concrete that retains water, as well as ponding, where concrete is submerged in water and wrapped in plastic. </p>

                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Types of Concrete:</h2>
                    <h4 style="text-align: justify;">
                        <p>There are many varieties of concrete. For different projects we may need different concrete, many types of concrete developed for a special application these days.</p>
                        <p>Calculating how much concrete you’ll require for a project comes in 2 steps: </p>
                        <ul>
                            <li>The first step will be what kind of concrete you will need. There are many, many varieties of concrete out there. Regular concrete or modern concrete is a mixed design using sand and other common materials that withstand pressure. </li>
                            <li>There are many types of concrete which are known as high or ultra-high performance, meaning it can really take any kind of hit and then there is cellular, cork, roller-compacted, glass, asphalt concrete types—endless possibilities to choose from.
                            </li>
                        </ul>
                        <p>Let us discuss some of the most commonly used concrete types:-</p>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Modern Concrete</h2>
                    <h4 style="text-align: justify;">
                        <p>Regular concrete is a lay term for concrete that is produced by the reading the instructions that are commonly published on packets of cement, typically using sand or some of the other common material as the aggregate, and often mixed in improvised containers. Any particular mix in ingredients will depend on the nature of the application. 
                        </p>
                        <p>Regular concrete can typically withstand a pressure from about 10-40 Mpa with lighter duty as blinding concrete having a much lower Mpa rating than structural concrete. 
                        </p>
                        <p>Many types of pre-mixed concrete available which include powdered cement mixed with aggregate, needing only water.
                        </p>
                        <p>
                            Mostly, a batch of concrete can be made by using 1 part Portland cement, 2 parts dry sand, 3 parts dry stone, 1/2 part water, and the parts are in terms of weight –not volume. i.e, 1-cubic-foot (0.028 m3) of concrete would be made using 22 lb (10.0 kg) cement, 10 lb (4.5 kg) water, 41 lb (19 kg) dry sand, 70 lb (32 kg) dry stone (1/2" to 3/4" stone). 

                        </p>
                        <p>
                            It will make 1-cubic-foot (0.028 m3) of concrete and would weigh about 143 lb (65 kg) and sand should be mortar or brick sand (washed and filtered if possible) and the stone should be washed if possible. Organic material should be removed from the sand and stone to ensure the highest strength.
                        </p>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Stamped Concrete</h2>
                    <h4 style="text-align: justify;">
                        <p>
                            It is an architectural concrete has a superior surface finish. After a concrete floor has been laid, floor hardener (can be pigmented) is impregnated on the surface &a mold that may be textured to replicative a stone, wood or even brick is stamped on to give an attractive textured surface finish.
                        </p>
                        <p>
                            After sufficient hardening, the surface is cleaned & generally sealed to provide protection. There is the wear resistance of stamped concrete is generally excellent and hence found in applications like parking lots pavements, walkways etc.
                        </p>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Advantages of concrete</h2>
                    <h4 style="text-align: justify;">
                        <p>
                            Following are the advantages of concrete 
                        </p>
                        <li>Concrete is free from defects and flaws as it can be mixed homogeneously also it can be cast to any desired shape and concrete can be manufactured to desired strength with an economy.
                        </li>
                        <li>The durability of a concrete-related structure is very high.
                        </li>
                        <li>The Casting work of concrete can be done in the working site which makes it economical.
                        </li>
                        <li>Maintenance cost of concrete is almost negligible.
                        </li>
                        <li>With the age deterioration of concrete is not appreciable.
                        </li>
                        <li>Due to its noncombustible nature it makes a building fire-safe.
                        </li>
                        <li>Concrete can withstand high temperatures.
                        </li>
                        <li>Concrete is resistant to wind and water. Therefore, it is very useful in storm shelters.
                        </li>
                        <li>Cinder concrete could be used as a soundproofing material.
                        </li>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Why Measuring the Amount of Concrete Required is Important?</h2>
                    <h4 style="text-align: justify;">
                        <p>
                            Cement and concrete can get expensive, so it pays to know how much concrete you need for your project. Below you can check that how much concrete your project requires based on the shape of the area you’ll be covering. 
                        </p>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>How to find the amount of concrete required?</h2>
                    <h4 style="text-align: justify;">
                        <p>
                            You will need to figure out exactly how much of the material you will need for your concrete project and all concrete is estimated in cubic yards (one cubic yard = 27 cubic feet) and large concrete jobs -four cubic yards or more - the concrete should be delivered by a ready-mix truck. 
                        </p>
                        <p>
                            The possibility will be there to haul fresh concrete to your site in special two-cubic-yard trailers provided by concrete producers. For medium and small projects, it’s best to mix your own in a rented concrete mixer. 
                        </p>
                        <p>
                            You can purchase sacks of ready-mix that only require water for a very small job.
                        </p>
                        <p>
                            One of the best ways to calculate how much concrete you’re going to need in cubic yards is to do the following.
                        </p>
                        <p>
                            The area should be marked properly so that it divides it into smaller areas and calculate the volume of the area after determining the shape of the area (see the chart below) by multiplying in the thickness of the concrete and it convert the volume from feet to cubic yards to get the number of cubic yards of concrete you’ll need.

                        </p>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Some Important Formulas for different Concrete forms</h2>
                    <h4 style="text-align: justify;">
                        <p>
                            Formulas are playing a very important role even in the calculation as every calculation should be 100% correct and effective. 
                        </p>
                        <p>
                            Below are some very important formulas I am going to discuss which will be very important as far as calculation of ‘’Concrete’’ is concern.
                        </p>
                        <ul>
                            <li>Calculate the concrete volume of a square slab</li>
                        </ul>
                        <p>
                            Volume in Cubic Feet (ft3) = Width x Length x Depth<br>
                            Volume in Cubic Yards (yd3) = Volume in Cubic Feet (ft3) / 27,<br>
                            Volume in (m3) is cubic meter= Volume in Cubic Feet (ft3) x 0.0283
                        </p>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>How to calculate concrete?</h2>
                    <h4 style="text-align: justify;">
                        <ol>
                            <li>Determine how thick you want the concrete</li>
                            <li>Measure the length and width that you’d like to cover</li>
                            <li>Multiply the length by the width to determine square footage</li>
                            <li>Convert the thickness from inches to feet</li>
                            <li>Multiply the thickness in feet by the square footage to determine cubic feet</li>
                            <li>Convert cubic feet to cubic yards by multiplying by .037</li>
                        </ol>
                        <p>What the math looks like for a 10’ by 10’ concrete patio see below:</p>
                        <ol>
                            <li>10 x 10 = 100 square feet</li>
                            <li>100 x .33 = 33 cubic feet</li>
                            <li>33 x .037 = 1.22 cubic yards</li>
                        </ol>
                        <p>It is essential that you are solving for volume and then converting to cubic yards. The formula for volume is as follows for the concrete: length x width x thickness.</p>
                        <p>For determining how many bags of concrete you will need, divide the total cubic yards needed by the yield.
                        </p>
                        <p>Use the following yields per each bag size:
                        </p>
                        <ul>
                            <li>40-pound bag yields .011 cubic yards</li>
                            <li>60-pound bag yields .017 cubic yards
                            </li>
                            <li>80-pound bag yields .022 cubic yards</li>
                        </ul>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ready-Mix vs. Bagged Concrete</h2>
                    <h4 style="text-align: justify;">
                        <p>Rather than trying to mix bag after bag by hand it is easy to complete when ordering concrete by the yard. Smaller jobs, like a walkway, modest patio or footings, you should calculate the number of concrete bags instead.</p>
                        <p>Bagged concrete is ideal for:</p>
                        <ul>
                            <li>Pouring small slabs for sidewalks or patios
                            </li>
                            <li>Setting posts for fences or mailboxes and making repairs to foundation walls, walkways or steps</li>
                            <li>Pouring small curbs, steps, or ramps
                            </li>
                            <li>Footings for decks, pergolas, walls and more
                            </li>
                        </ul>
                        <p>Ready-mixed concrete is good for:
                        </p>
                        <ul>
                            <li>Large patios, driveways, pool decks and more</li>
                            <li>Foundation slabs for a house</li>
                            <li>Parking lots or commercial sidewalks</li>
                        </ul>
                    </h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>What is Concrete Calculator?</h2>
                    <h4 style="text-align: justify;">
                        <p>
                            The Concrete calculator is a device or a machine which estimates weight and volume of a concrete necessary to cover a given area, it also estimates the number of bags of concrete necessary based on standard 60 to 80 pounds bags of concrete.
                        </p>
                        <p>
                            Purchasing more even slightly concrete than the estimated result can reduce the probability of having insufficient concrete.
                        </p>
                        <p>
                            A concrete calculator is also a free calculator which calculates the amount of cement, sand and aggregate required in a concrete.
                        </p>
                    </h4>
                </div>
            </div>
        </div>
<br>
        <div id="mc_embed_signup">
            <form action="https://constructiontips.us17.list-manage.com/subscribe/post?u=53c3c62743909e39787ac168e&amp;id=c854efab19" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="mce-EMAIL">Subscribe to our mailing list</label>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required >
                    <!--                    real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
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

