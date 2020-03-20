@extends('layouts.website')

@section('content')

    <!-- Showcase Section -->
    <div class="header_section section">
        <div class="social-icon">
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/codingeek.net"><i
                            class="fab fa-facebook-square"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/codingeeknet/"><i
                            class="fab fa-instagram"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/codingeeknet"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/company/codingeek/about/"><i
                            class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="header-carousel">
            <div class="single-header-item">
                <div class="content-area">
                    <h1 class="title">Choose the bright <br>and right career for you.</h1>
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit
                        odio. Morbi sodales nisi nec
                        tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum
                        est rutrum eget. Vestibulum molestie at sapien sed facilisis.</p>

                    <a href="#" class="boxed-btn">Learn More</a>
                </div>
                <div class="bg-image" style="background-image: url(assets/img/slider/home1/juan-ramos.png)">

                </div>
            </div>
            <div class="single-header-item">
                <div class="content-area">
                    <h1 class="title">We helpe you go further than you have ever dreamed.</h1>
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit
                        odio. Morbi sodales nisi nec
                        tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum
                        est rutrum eget. Vestibulum molestie at sapien sed facilisis.</p>
                    <a href="#" class="boxed-btn">Learn More</a>
                </div>
                <div class="bg-image" style="background-image: url(assets/img/slider/home1/adolescent-adorable.jpg)">
                </div>
            </div>
            <div class="single-header-item">
                <div class="content-area">
                    <h1 class="title">The education you want, the attention you deserve.</h1>
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit
                        odio. Morbi sodales nisi nec
                        tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum
                        est rutrum eget. Vestibulum molestie at sapien sed facilisis.</p>
                    <a href="#" class="boxed-btn">Learn More</a>
                </div>
                <div class="bg-image"
                     style="background-image: url(assets/img/slider/home1/bestfriends-boys-dating.jpg)"></div>
            </div>
            <div class="single-header-item">
                <div class="content-area">
                    <h1 class="title">Best university facilities in the world.</h1>
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit
                        odio. Morbi sodales nisi nec
                        tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum
                        est rutrum eget. Vestibulum molestie at sapien sed facilisis.</p>
                    <a href="#" class="boxed-btn">Learn More</a>
                </div>
                <div class="bg-image" style="background-image: url(assets/img/slider/home1/uni-students.jpg)"></div>
            </div>
        </div>
    </div>

    <!-- Events Section -->
    <section class="events-section section">
        <!-- Side Icons -->
        <div class="fixed-right side-form-icons">
            <i class="fas fa-phone icon" id="open-opening-popup"></i>
            <i class="fas fa-map-marker-alt icon" id="open-location-popup"></i>
            <i class="fas fa-envelope icon" id="open-form-popup"></i>
        </div>
        <div class="container">
            <h2 class="margin-bottom-50">Upcoming events</h2>

            <div class="row event-item-style-1 odd-event">
                <div class="col-5 col-lg-2 date">
                    <h1>12</h1>
                    <h5>JAN 2019</h5>
                </div>
                <div class="col-7 col-md-6 col-lg-3 media">
                    <img src="assets/img/University/students/adult-biology-chemical.png" alt="events image"
                         class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 details">
                    <h3>Photography basics: Upcoming project</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit odio. Morbi sodales nisi
                        nec tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu
                        condimentum est rutrum eget. Vestibulum molestie at sapien sed facilisis.
                    </p>
                    <div class="d-flex align-items-center event-infos">
                        <div class="info">
                            <i class="fas fa-clock"></i>
                            <span>All Day</span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-users"></i>
                            <span>207</span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Port Louis, Mauritius</span>
                        </div>
                    </div>
                    <button class="main-btn">Learn more</button>
                </div>
            </div>
            <div class="row event-item-style-1 even-event">
                <div class="col-5 col-lg-2 date">
                    <h1>21</h1>
                    <h5>FEB 2019</h5>
                </div>
                <div class="col-7 col-md-6 col-lg-3 media">
                    <img src="assets/img/University/students/adult-business.png" alt="events image" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 details">
                    <h3>Science national competition</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit odio. Morbi sodales nisi
                        nec tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu
                        condimentum est rutrum eget. Vestibulum molestie at sapien sed facilisis.
                    </p>
                    <div class="d-flex align-items-center event-infos">
                        <div class="info">
                            <i class="fas fa-clock"></i>
                            <span>All Day</span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-users"></i>
                            <span>207</span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Port Louis, Mauritius</span>
                        </div>
                    </div>
                    <button class="main-btn">Register now</button>
                </div>

            </div>
            <div class="row event-item-style-1 odd-event">
                <div class="col-5 col-lg-2 date">
                    <h1>12</h1>
                    <h5>JAN 2019</h5>
                </div>
                <div class="col-7 col-md-6 col-lg-3 media">
                    <img src="assets/img/University/students/adult-biology-chemical.png" alt="events image"
                         class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 details">
                    <h3>Photography basics: Upcoming project</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit odio. Morbi sodales nisi
                        nec tortor commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu
                        condimentum est rutrum eget. Vestibulum molestie at sapien sed facilisis.
                    </p>
                    <div class="d-flex align-items-center event-infos">
                        <div class="info">
                            <i class="fas fa-clock"></i>
                            <span>All Day</span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-users"></i>
                            <span>207</span>
                        </div>
                        <div class="info ml-5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Port Louis, Mauritius</span>
                        </div>
                    </div>
                    <button class="main-btn">Learn more</button>
                </div>
            </div>
            <div class="view-more text-center">
                <a href="event.html">View all</a>
            </div>
        </div>
    </section>

    <!-- Popup -->
    <div class="side-form-popup">
        <div class="popup-wrapper">
            <div class="center-popup">
                <div class="opening-popup">
                    <div class="close-popup">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-8 media">
                            <img src="assets/img/University/students/adolescent-adorable-alone.png" alt="media"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-4 content">
                            <h5>Opening hours</h5>
                            <div class="openings">
                                <div class="opening opening-days">
                                    <p class="day">Monday</p>
                                    <div class="divider"></div>
                                    <p class="day">Friday</p>
                                </div>
                                <div class="opening opening-time">
                                    <p class="time">08.00 am</p>
                                    <div class="divider"></div>
                                    <p class="time">16.00 pm</p>
                                </div>
                            </div>
                            <p class="num">+24 45 15 62 129</p>
                        </div>
                    </div>
                </div>
                <div class="location-popup">
                    <div class="close-popup">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-8 media">
                            <div id="location-map"></div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 content">
                            <h5>Address</h5>
                            <p class="address">2, Ave Manchester, Lorem ipsum St, Rio Danubin</p>
                            <button class="main-btn">Open in Maps</button>
                        </div>
                    </div>
                </div>
                <div class="form-popup">
                    <div class="close-popup">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-7 content">
                            <h4>You have a question for us?</h4>
                            <p>leave your message below or email us at info@bantinguniversity.com</p>
                            <form class="text-left form-style-2">
                                <div class="form-group required">
                                    <label for="email">Email address</label>
                                    <input type="email" id="email" class="form-control" name="email"
                                           placeholder="johnLP12@gmail.com" />
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <input type="text" id="message" class="form-control" name="name"
                                           placeholder="Hello, I wanted to know about this particular course called..." />
                                    <span class="small-text">120 characters left</span>
                                </div>
                                <button class="main-btn" type="submit">Send message</button>
                            </form>
                        </div>
                        <div class="d-none d-lg-block col-lg-5 media">
                            <img src="assets/img/University/Coming_soon/ambar-simpang.png" alt="media image"
                                 class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial carousel area -->
    <section class="testimonial-carousel-area padding-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="testimonial-style-1 white-bg">
                        <div class="section-title with-icon">
                            <h3 class="title">What our students say</h3>
                        </div>
                        <div class="testimonial-slider-arrows"></div>
                        <div class="testimonial-slider-dots d-none d-md-block"></div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="testimonial-thumbnail-slider">
                                    <div class="single-testimonial-thumb">
                                        <div class="img-wrap">
                                            <div class="img"
                                                 style="background-image: url(assets/img/profiles/student_4.png)"></div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial-thumb">
                                        <div class="img-wrap">
                                            <div class="img"
                                                 style="background-image: url(assets/img/profiles/student_5.png)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial-thumb">
                                        <div class="img-wrap">
                                            <div class="img"
                                                 style="background-image: url(assets/img/profiles/student_3.png)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial-thumb">
                                        <div class="img-wrap">
                                            <div class="img"
                                                 style="background-image: url(assets/img/profiles/student_2.png)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial-thumb">
                                        <div class="img-wrap">
                                            <div class="img"
                                                 style="background-image: url(assets/img/profiles/student_1.png)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="testimonial-description-slider">
                            <div class="single-testimonial-item">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at
                                    ullamcorper
                                    orci ullamcorper ut. Integer vehicula iaculis risus, non consequat eros tincidunt
                                    ac. Morbi a
                                    aliquam tortor. Nam convallis vestibulum nisi, sit amet fermentum libero scelerisque
                                    id.
                                    Integer
                                    iaculis mollis justo, sed interdum ligula auctor in.</p>
                                <div class="author-meta">
                                    <h4 class="title"><strong>William Edwards</strong><span class="divider"> | </span><span
                                            class="designation">BA Hons Project
                                            Management</span></h4>
                                </div>
                            </div>
                            <div class="single-testimonial-item">
                                <p>2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at
                                    ullamcorper orci ullamcorper ut. Integer vehicula iaculis risus, non consequat eros
                                    tincidunt ac. Morbi a aliquam tortor. Nam convallis vestibulum nisi, sit amet
                                    fermentum libero scelerisque id. Integer iaculis mollis justo, sed interdum ligula
                                    auctor in.</p>
                                <div class="author-meta">
                                    <h4 class="title"><strong>Nichol sara</strong><span class="divider"> | </span><span
                                            class="designation">Computer Science</span></h4>
                                </div>
                            </div>
                            <div class="single-testimonial-item">
                                <p>orper ut. Integer vehicula iaculis risus, non consequat eros
                                    tincidunt ac. Morbi a aliquam tortor. Nam convallis vestibulum nisi, sit amet
                                    fermentum libero scelerisque id. Integer iaculis mollis justo, sed interdum ligula
                                    auctor in.</p>
                                <div class="author-meta">
                                    <h4 class="title"><strong>Jane Doson</strong><span class="divider"> | </span><span
                                            class="designation">BA Hons English</span></h4>
                                </div>
                            </div>
                            <div class="single-testimonial-item">
                                <p>4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at
                                    ullamcorper orci ullamcorper ut. Integer vehicula iaculis risus, non consequat eros
                                    tincidunt ac. Morbi a aliquam tortor. Nam convallis vestibulum nisi, sit amet
                                    fermentum libero scelerisque id. Integer iaculis mollis justo, sed interdum ligula
                                    auctor in.</p>
                                <div class="author-meta">
                                    <h4 class="title"><strong>William Edwards</strong><span class="divider"> | </span><span
                                            class="designation">BA Hons Project
                                            Management</span></h4>
                                </div>
                            </div>
                            <div class="single-testimonial-item">
                                <p>5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at
                                    ullamcorper orci ullamcorper ut. Integer vehicula iaculis risus, non consequat eros
                                    tincidunt ac. Morbi a aliquam tortor. Nam convallis vestibulum nisi, sit amet
                                    fermentum libero scelerisque id. Integer iaculis mollis justo, sed interdum ligula
                                    auctor in.</p>
                                <div class="author-meta">
                                    <h4 class="title"><strong>William Edwards</strong><span class="divider"> | </span><span
                                            class="designation">BA Hons Project
                                            Management</span></h4>
                                </div>
                            </div>
                            <div class="single-testimonial-item">
                                <p>6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at
                                    ullamcorper orci ullamcorper ut. Integer vehicula iaculis risus, non consequat eros
                                    tincidunt ac. Morbi a aliquam tortor. Nam convallis vestibulum nisi, sit amet
                                    fermentum libero scelerisque id. Integer iaculis mollis justo, sed interdum ligula
                                    auctor in.</p>
                                <div class="author-meta">
                                    <h4 class="title"><strong>Michel Hamson </strong><span class="divider"> | </span><span
                                            class="designation">Masters in
                                            Economics</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section section">
        <div class="container text-center">
            <h2>Why choose us?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui iusto sapiente laudantium
                inventore
                vel aliquam iste culpa id optio, labore, ut illo praesentium voluptatibus doloremque atque autem.
                Facilis debitis perspiciatis rerum, reiciendis, cumque minus temporibus, magnam atque quam similique
                nisi dolores? Optio earum quis quam perferendis culpa, dolor veritatis!</p>
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-lg-6 media">
                    <img src="assets/img/University/students/naassom-azevedo.png" alt="feature image" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 content">
                    <div class="accordion-wrapper">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a role="button" data-toggle="collapse" data-target="#collapseOne"
                                           aria-expanded="true" aria-controls="collapseOne">
                                            Learn at your own pace
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit odio. Morbi
                                        sodales nisi nec tortor commodo
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            Online instructors easily accessible
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque, blanditiis
                                        animi dignissimos distinctio temporibus?
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            Get certified awards
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque, blanditiis
                                        animi dignissimos distinctio temporibus?
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#collapseFour" aria-expanded="false"
                                           aria-controls="collapseFour">
                                            More than 300+ courses available
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque, blanditiis
                                        animi dignissimos distinctio temporibus?
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#collapseFive" aria-expanded="false"
                                           aria-controls="collapseFive">
                                            Certified lecturers
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque, blanditiis
                                        animi dignissimos distinctio temporibus?
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-target="#collapseSix" aria-expanded="false"
                                           aria-controls="collapseSix">
                                            Online instructors easily accessible
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque, blanditiis
                                        animi dignissimos distinctio temporibus?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section section">
        <div class="container">
            <h2 class="text-left">From the Blog</h2>
            <div class="blog-carousel-wrap">
                <div class="blog-carousel-controls hide-md-and-down">
                    <div class="dots"></div>
                </div>
                <div class="blog-carousel-01">
                    <div class="single-blog-grid-item-01">
                        <div class="thumb">
                            <img src="assets/img/University/students/adolescent-adorable-alone.png" alt="blog image">
                            <div class="hover">
                                <a href="#" class="readmore"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="time">Lorem Ipsum</span>
                            <h4 class="title"><a href="#">Top 5 apps to download for <br>time management</a></h4>
                        </div>
                    </div>
                    <div class="single-blog-grid-item-01">
                        <div class="thumb">
                            <img src="assets/img/University/students/backpacks-college-students.png" alt="blog image">
                            <div class="hover">
                                <a href="#" class="readmore"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="time">Lorem Ipsum</span>
                            <h4 class="title"><a href="#">The secret to a successful a revision session with your
                                    friends for final exams</a></h4>
                        </div>
                    </div>
                    <div class="single-blog-grid-item-01">
                        <div class="thumb">
                            <img src="assets/img/University/students/adolescent-adorable-alone.png" alt="blog image">
                            <div class="hover">
                                <a href="#" class="readmore"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="time">Lorem Ipsum</span>
                            <h4 class="title"><a href="#">Top 5 apps to download for <br>time management</a></h4>
                        </div>
                    </div>
                    <div class="single-blog-grid-item-01">
                        <div class="thumb">
                            <img src="assets/img/University/students/backpacks-college-students.png" alt="blog image">
                            <div class="hover">
                                <a href="#" class="readmore"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="time">Lorem Ipsum</span>
                            <h4 class="title"><a href="#">Top 5 apps to download for <br>time management</a></h4>
                        </div>
                    </div>
                    <div class="single-blog-grid-item-01">
                        <div class="thumb">
                            <img src="assets/img/University/students/backpacks-college-students.png" alt="blog image">
                            <div class="hover">
                                <a href="#" class="readmore"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="time">Lorem Ipsum</span>
                            <h4 class="title"><a href="#">The secret to a successful a revision session with your
                                    friends for final exams</a></h4>
                        </div>
                    </div>
                </div>
                <h1 class="rotated-text hide-md-and-down">BLOG</h1>
            </div>
            <button class="main-btn">Read our blogs</button>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="achievement-section section">
        <div class="container">
            <div id="counters" class="row text-center">
                <div class="col-12 col-md-4">
                    <h1><span class="students-counter count-number">32,980</span></h1>
                    <h4>Global students</h4>
                </div>
                <div class="col-12 col-md-4">
                    <h1><span class="courses-counter count-number">400</span>+</h1>
                    <h4>Courses</h4>
                </div>
                <div class="col-12 col-md-4">
                    <h1><span class="reviews-counter count-number">10,652</span></h1>
                    <h4>5 Star Reviews</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
