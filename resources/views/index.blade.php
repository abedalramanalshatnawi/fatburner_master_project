@extends('layouts.app')
@section('content')
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1><span>Healthy</span> food</h1>
                            <p>
                            A healthful diet typically includes nutrient-dense foods from all major food groups, including lean proteins, whole grains, healthful fats, and fruits and vegetables of many colors.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="{{ url('/book') }}">Find nutrition</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1> <span> Calculate</span> your calories</h1>
                            <p>
                            The Calorie Calculator can be used to estimate the number of calories a person needs to consume each day. This calculator can also provide some simple guidelines for gaining or losing weight.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="{{ url('/book') }}">Find nutrition</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Ask a <span>nutritionist<span></h1>
                            <p>
                            A nutritionist can help you calculate your daily calorie needs and give you suggestions for healthy meals during the day.

                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="{{ url('/book') }}">Find nutrition</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->

        <!-- Booking End -->


        <!-- About Start -->
        <!-- <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>About Us</p>
                                <h2>Cooking Since 1990</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Welcome To Meal King!

                                    We Are The Best Place To Go When You’re Looking For Delicious Mouthwatering Meal

                                    Our Specialty Is The Flavors Starting From The North To The South!

                                    And West To The East!

                                    We Are The Diner Where You Find Amazing Combinations And Unexpected As Well, Amazing Atmosphere , Endless Joy, Magnificent Tastes And Affordable Prices !!

                                    To Sum Up , Best Meal In Town.

                                    Reservation Service Is Available At :

                                    06-5689148
                                </p>
                                {{-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p> --}}
                                <a class="btn custom-btn" href="{{ url('/book') }}">Book A Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About End -->


        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- Feature Start -->
        <!-- <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" >
                        <div class="section-header">
                            <p>Why Choose Us</p>
                            <h2>Our Key Features</h2>
                        </div>
                        <div class="feature-text">
                            <div class="feature-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="img/feature-1.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-2.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-3.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-4.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                            {{-- <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl nec nisi sceleri maximus
                            </p> --}}
                            <a class="btn custom-btn" href="{{ url('/book') }}">Book A Table</a>
                        </div>
                    </div>
                    <div class="col-lg-7" >
                        <div class="row">
                            <div class="col-sm-6 "  >
                                <div class="feature-item">
                                    <i class="flaticon-cooking"></i>
                                    <h3>World’s best Chef</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p> --}}
                                </div>
                            </div>
                            <div class="col-sm-6"  >
                                <div class="feature-item">
                                    <i class="flaticon-vegetable"></i>
                                    <h3>Natural ingredients</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" >
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>Best quality products</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p> --}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-meat"></i>
                                    <h3>Fresh vegetables & Meet</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>Fastest door delivery</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p> --}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-fruits-and-vegetables"></i>
                                    <h3>Ground beef & Low fat</h3>
                                    {{-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End -->


        <!-- Food Start -->
        <div class="food">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-Meal"></i>
                            <h2>Breakfasts</h2>
                            <p>.

                            It is recommended to eat an appropriate amount of carbohydrates that give you energy during the day.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-snack"></i>
                            <h2>Lunch</h2>
                            <p>
                            It is recommended to eat an appropriate amount of protein that helps build muscle.

                            </p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cocktail"></i>
                            <h2>Dinner</h2>
                            <p>
                            It is recommended to eat a small amount of sugars and fats to help the body burn fat during sleep.

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->


        <!-- Menu Start -->
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">

                    <h2>Calculate your Daily Calories</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#Meal">Protein Meals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Carbohydrate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Fruits</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="Meal" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/p1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span> Chicken</span> <strong>288 cal</strong></h3>
                                            <p style="margin:14.4px 5px 0 0">250 gram of grilled chicken Steamed or uncooked (Fresh chicken breasts) .</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/p2.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Meat</span> <strong>325 cal</strong></h3>
                                            <p>250 gram grilled meat, steamed or uncooked (fresh veal shoulder without fat) .</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/p3.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Salmon Fish</span> <strong> 410 cal</strong></h3>
                                            <p> 250 gram grilled salmon, steamed or uncooked (fresh, pure fish without thorns) .</p></div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/p4.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Fish fillet</span> <strong>365 cal</strong></h3>
                                            <p>250 gram grilled fish fillet, steamed or uncooked (fresh, pure fish without thorns) .</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/p5.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Tuna Fish</span> <strong>260 cal</strong></h3>
                                            <p>250 gram grilled tuna, steamed or uncooked (fresh, pure fish without thorns) .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-Meal-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/s1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Bread 100 gram</span> <strong>266 cal</strong></h3>


                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/s3.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Rice 250 gram</span> <strong>310 cal</strong></h3>

                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/s2.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Boiled potatoes 150 gram</span> <strong>120 cal</strong></h3>

                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/s5.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Lentil 200 gram</span> <strong>190 cal</strong></h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-snack-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/d1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Strawberry 100 gram</span> <strong>28 cal</strong></h3>

                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/d2.jpg"alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Orange 100 gram</span> <strong>48 cal</strong></h3>

                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/d3.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Apples 100 gram</span> <strong>90 cal</strong></h3>

                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/d4.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Banana 100 gram</span> <strong>120 cal</strong></h3>

                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/w.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Blueberry 100 gram</span> <strong>65 cal</strong></h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-beverage-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        <!-- Menu End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">

                    <h2>Our Nutritionist</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Ahmad </h2>
                                <p>Nutritionist No.1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Abdalrahman</h2>
                                <p>Nutritionist No.2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>mohammed</h2>
                                <p>Nutritionist No.3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Ismail</h2>
                                <p>Nutritionist No.4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <p>
                         Is the best I have ever experienced at ANY  food establishment. Restaurant is very clean and neat looking. Maybe the food seems to taste better because of these facts. A great place for a fast meal.

                        </p>
                        <h2>Samer</h2>

                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <p>
                            I normally don't write reviews for fast food. However this place stands out. It is clean, friendly service, and much better than average food for the price.  This is a great place!

                        </p>
                        <h2>Khaled</h2>

                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <p>
                            The service was absolutely fantastic and so was all the food! We can’t thank you enough!!!! All the staff did such a great job!! We had compliments about it all night! Thanks for making our night perfect!



                        </p>
                        <h2>Mona</h2>

                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Image">
                        </div>
                        <p>
                            Thanks for making the ONLY snack that’s totally pure and tastes great too!Staff is the best I have ever experienced , I tried a baked potato and it was as good as any baked potato in any restaurant!


                        </p>
                        <h2>Ahmad</h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->

        <!-- Contact End -->


        <!-- Blog Start -->
        {{-- <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Blog</p>
                    <h2>Latest From Food Blog</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Food</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                    </p>
                                    <a class="btn custom-btn" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Food</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                    </p>
                                    <a class="btn custom-btn" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog End -->


@endsection
