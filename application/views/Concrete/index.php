<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Theme Made By www.w3schools.com -->
        <title>Concrete Calculator</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--        Custom Style Sheet-->
        <link rel="stylesheet" href="assets/css/style.css">
        
    </head>
    
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#myPage">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Container (About Section) -->
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Concrete Calculator</h2><br>
                    <h4>
                        The Concrete Calculator estimates the volume and weight of concrete necessary to cover a given area. It also estimates the number of bags of concrete necessary based on standard 60 and 80– pound bags of concrete. Purchasing slightly more concrete than the estimated result can reduce the probability of having insufficient concrete.
                    </h4><br>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-grey">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
            </div>
        </div>

        <!-- Container (Portfolio Section) -->
        <div id="portfolio" class="container-fluid text-center bg-grey">
        </div>


        <!-- Container (Contact Section) -->
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
                </div>
                <div class="col-sm-7 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image of location/map -->
        <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
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
