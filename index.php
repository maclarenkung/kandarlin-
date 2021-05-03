<?php require_once('./inc/inc_meta.php')?>

<body>
    <?php  require_once('./inc/inc_header.php')?>
    <div class="wrapper">

        <div class="sec-banner float-left w-100 ">
            <div class="position-relative">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/image/bgs.jpg"
                                alt="" class="float-left w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/image/bgs.jpg"
                                alt="" class="float-left w-100">
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="welcome container">
            <div class="head-top text-center">
                <p>Welcome to</p>
                <h2>Kandarlin Clinic</h2>

            </div>
            <div class="tent">
                <img src="assets/image/bg-welcome.jpg" alt="" class="img-welcome img-fluid">
                <div class="text-rightt container">
                    <div class="headtop">
                        <h1>Kandarlin Clinic</h1>
                    </div>
                    <div class="textbottom">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corrupti quod nam odit! Cumque ad tenetur voluptates ipsa commodi, voluptatibus quis sit, voluptate culpa obcaecati rerum rem repudiandae dignissimos sint.</span>
                    </div>
                    <div class="textbottom">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corrupti quod nam odit! Cumque ad tenetur voluptates ipsa commodi, voluptatibus quis sit, voluptate culpa obcaecati rerum rem repudiandae dignissimos sint.</span>
                    </div>
                    <div class="button">
                        <a href="#" class="btn">
                            READ MORE >
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-collection fw ptb-6">
            <div class="position-relative">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-3">
                            <div class="group-content">
                                <input type="text" placeholder="Search..">
                            </div>
                            <div id="sidebar-container " class="sidebar-expanded fw">
                                <ul class="list-group">
                                    <a href="#submenu1" data-toggle="collapse" aria-expanded="true"
                                        class="list-head-toggle list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="menu-collapsed">Collection</span>
                                            <span class="submenu-icon ml-auto"></span>
                                        </div>
                                    </a>
                                    <div id='submenu1' class="collapse sidebar-submenu show">
                                        <a href="#" class="list-group-item list-group-item-action ">
                                            <span class="menu-collapsed">collection 1</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action ">
                                            <span class="menu-collapsed">collection 2</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action ">
                                            <span class="menu-collapsed">collection 3</span>
                                        </a>
                                    </div>

                                </ul>
                                <ul class="list-group">
                                    <a href="#submenu2" data-toggle="collapse" aria-expanded="true"
                                        class="list-head-toggle list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="menu-collapsed">Collection</span>
                                            <span class="submenu-icon ml-auto"></span>
                                        </div>
                                    </a>
                                    <div id='submenu2' class="collapse sidebar-submenu show">
                                        <a href="#" class="list-group-item list-group-item-action ">
                                            <span class="menu-collapsed">collection 1</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action ">
                                            <span class="menu-collapsed">collection 2</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action ">
                                            <span class="menu-collapsed">collection 3</span>
                                        </a>
                                    </div>

                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="row">
                                <div class="col-12">
                                    <div class="filler-box">
                                        <div class="group-content">
                                            <p>Showing 1–12 of 126 results</p>
                                        </div>
                                        <div class="group-content d-flex justify-content-flex-end align-items-center">
                                            <p>Sort by Price:</p>
                                            <select class="selectpicker" name="" id="">Low To High
                                                <option value="">Low To High</option>
                                                <option value="">$0 - $55</option>
                                                <option value="">$55 - $100</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <?php for($i=0;$i< 9; $i++){ ?>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="thumb-product">
                                        <img class="fw"
                                            src="https://images.unsplash.com/photo-1596644462600-09abbe12a802?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1451&q=80"
                                            alt="">
                                        <div class="thumb-body">
                                            <div class="thumb-title">Product Name</div>
                                            <div class="thumb-price">฿ 67.24</div>
                                            <div class="group-content text-center">
                                                <a href="javascript:void(0);" class="btn">+ Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row" id="body-row">
            <div id="sidebar-container" class="sidebar-expanded d-md-block d-none">
                <ul class="list-group">
                    <li
                        class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small>MAIN MENU</small>
                    </li>
                    <a href="#submenu1" data-toggle="collapse" aria-expanded="false"
                        class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-dashboard fa-fw mr-3"></span>
                            <span class="menu-collapsed">Dashboard</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a>
                    <div id='submenu1' class="collapse sidebar-submenu">
                        <a href="#" class="list-group-item list-group-item-action ">
                            <span class="menu-collapsed">Charts</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action ">
                            <span class="menu-collapsed">Reports</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action ">
                            <span class="menu-collapsed">Tables</span>
                        </a>
                    </div>

                </ul>
            </div>
        </div> -->
    </div>
    <?php require_once('./inc/inc_footer.php')?>
    <?php require_once('./inc/inc_script.php')?>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>