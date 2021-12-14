
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">



      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="main.css">
      <title>Beautiful BD</title>
    </head>

    <body id="home" class="scrollspy">
        <!--NavBar-->
        <div class="navbar-fixed">
            <nav class="deep-purple lighten-3">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo"><i class="fas fa-helicopter"></i>Travel</a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a href="#home"><i class="fas fa-home"></i></a>
                            </li>
                            <li>
                                <a href="#search"><i class="fas fa-search-location"></i></a>
                            </li>
                            <li>
                                <a href="#event"><i class="fas fa-calendar-alt"></i></a>
                            </li>
                          
                            <li>
                                <a href="#gallery"><i class="far fa-images"></i></a>
                            </li>
                          
                            <li>
                                <a id="trial" href="./index.php"><i class="fas fa-user-plus"></i> </a>
                                
                               
                            </li>

                         
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul class="sidenav" id="mobile-nav">
            <li>
                <a href="#home">Home</a>
            </li>
            
            <li>
                <a href="#search">Search</a>
            </li>
            <li>
                <a href="#event">Events</a>
            </li>
            <li>
                <a href="#popular">Popular Places</a>
            </li>
            <li>
                <a href="#gallery">Gallery</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
            <li>
                <a href="#">Login</i>
                </a>
            </li>
        </ul>

        <!-- Section : Slider -->
        <section class="slider">
            <ul class="slides">
                <li>
                  <img src="img/media_1.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h2>Tour De Sylhet</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae repudiandae earum hic. Minima, incidunt! Praesentium commodi voluptate natus ducimus non!</h5>
                  </div>
                </li>
                <li>
                  <img src="img/media_2.jpeg"> <!-- random image -->
                  <div class="caption left-align">
                    <h2>Bandarban</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste voluptate sapiente fugit est quidem unde odio corrupti reprehenderit earum temporibus.</h5>
                  </div>
                </li>
                <li>
                  <img src="img/media_3.jpg"> <!-- random image -->
                  <div class="caption right-align">
                    <h2>Longest Beach Cox's Bazar</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat illum earum, laborum iusto quo quis facere. Expedita itaque aliquam accusantium?</h5>
                  </div>
                </li>
               
              </ul>
        </section>
        
        
        <!--section:search-->
        <section id="search" class="section section-seach   grey white-text center scrollspy">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h3>Search Destinations</h3>
                        <div class="input-field">
                            <input type="text" class="white gray-text autocomplete" id="autocomplete-input" placeholder="Bandarbna, Thanchi ,Cox's Baxar etc..">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Section : Icon Boxes-->
        <section class="section section-icons grey lighten-4 center">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large teal-tex">room</i>
                            <h4>Pick Where</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, distinctio.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large teal-tex">store</i>
                            <h4>Travel Shop</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, distinctio.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large teal-tex">airplanemode_active</i>
                            <h4>Fly Cheap</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, distinctio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!--Section: Events Nearby-->
         <section id="event" class="section section-popular scrollspy">
            <div class="container">
                <div class="row">
                    <h4 class="center"><span class="purple-text">   Events  Nearby   </span></h4>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/1.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/2.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://images.hdqwalls.com/wallpapers/thumb/dunedin-new-zealand-4k-lj.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/5.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/4.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/5.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Section: Popular Places-->
        <section id="popular" class="section section-popular scrollspy">
            <div class="container">
                <div class="row">
                    <h4 class="center"><span class="teal-text">Popular</span> places</h4>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/1.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/2.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://images.hdqwalls.com/wallpapers/thumb/dunedin-new-zealand-4k-lj.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/5.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/4.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/5.jpg" alt="">
                                <span class="card-title">
                                     Sreemangal
                                </span>
                            </div>
                            <div class="card-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, laboriosam!
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

       

        <!--section:gallery-->
        <section id="gallery" class="section section-gallery scrollspy">
            <div class="container">
                <h4 class="center">
                    <span class="teal-text">Photo</span> Gallery
                </h4>
                <div class="row">
                    <div class="col s12 m3">
                        <img src="img/1.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    <div class="col s12 m3">
                        <img src="https://images.hdqwalls.com/wallpapers/thumb/dunedin-new-zealand-4k-lj.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    <div class="col s12 m3">
                        <img src="img/1.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    <div class="col s12 m3">
                        <img src="img/2.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col s12 m3">
                        <img src="img/1.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    <div class="col s12 m3">
                        <img src="https://images.hdqwalls.com/wallpapers/thumb/dunedin-new-zealand-4k-lj.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    <div class="col s12 m3">
                        <img src="img/1.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    <div class="col s12 m3">
                        <img src="img/2.jpg" alt="" class="materialboxed responsive-img">
                    </div>
                    
                </div>
               
                    
                </div>
            </div>
        </section>

        <!-- Section : Contact -->
        <section id="contact" class="section section-contact scrollspy">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card-panel teal white-text center">
                            <i class="material-icons">email</i>
                            <h5>Contact Us For Booking</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quia aperiam similique dolorum possimus! Sapiente, voluptatibus nesciunt unde doloribus aliquid necessitatibus labore recusandae.</p>
                        </div>
                        <ul class="collection with-header">
                            <li class="collection-header"><h4>
                                Location
                            </h4></li>
                            <li class="collection-item">Travel Agency</li>
                            <li class="collection-item">12/B, Dhanmondi -27 </li>
                            <li class="collection-item"> Dhaka,Bangladesh</li>
                        </ul>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel grey lighten-3">
                            <h5>Please Fill out this form</h5>
                            <div class="input-field">
                                <input type="text" placeholder="Enter your name" >
                                
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="Enter your email" >
                                
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="Enter your phone number" >
                                
                            </div>
                            <div class="input-field">
                                <textarea placeholder="Enter Message" ></textarea>
                                
                            </div>
                            <input type="submit" value="Submit" class="btn red  lighten-2 black-text">

                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!--section: Follow-->
         <section class="section section-follow  black-text center scrollspy">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h4>Follow Team Aspirant</h4>
                        <p>Follow us on our social media for more updates..</p>
                        <a href="#" class="black-text"><i class="fab fa-facebook fa-4x"></i></a>
                        <a href="#" class="black-text"><i class="fab fa-instagram fa-4x"></i></a>
                        <a href="#" class="black-text"><i class="fab fa-linkedin fa-4x"></i></a>
                        <a href="#" class="black-text"><i class="fab fa-twitter fa-4x"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->

        <footer class="section green lighten-2 white-text center">
            <p class="flow-text">Beautiful BD &copy; 2021</p>
        </footer>

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
         //sidenav
         const sideNav = document.querySelector('.sidenav');
         M.Sidenav.init(sideNav,{});

         //slider
         const slider = document.querySelector('.slider');
         M.Slider.init(slider,{
             indicators: false,
             height:500,
             transition:500,
             interval:6000

         });

         //autocomplete

         const ac = document.querySelector('.autocomplete');
         M.Autocomplete.init(ac,{
            data:{
                "Coxs Bazar":null,
                "Sajek":null,
                "Bandarban":null,
                "Sylhet":null,
                "Teknaf":null,
                "Saint Martin":null,
                "Sunamganj":null,
                "Rangamati":null,
                "Rajshahi":null,

            }
         });

         //Material Boxed

         const mb = document.querySelectorAll('.materialboxed');
         M.Materialbox.init(mb,{});

         //scrollspy

         const ss = document.querySelectorAll('.scrollspy');
         M.Scollspy.init(ss,{});

     </script>
    </body>
  </html>
        
