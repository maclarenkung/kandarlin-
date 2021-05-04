<?php require_once('./inc/inc_meta.php')?>

<body>
    <?php  require_once('./inc/inc_header.php')?>
    <div class="wrapper">
        <div class="sec-article-content float-left w-100 pd ">
            <div class="position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="group-content">
                                <h1>Article name</h1>
                                <hr>
                            </div>
                            <div class="content-creater">
                                <div class="thumb-nails">
                                    <img src="assets/image/bg-welcome.jpg" alt="">
                                    <div class="thumb-nails-body">
                                        <div class="thumb-nails-title">Kandarlin Clinic</div>
                                        <div class="thumb-nails-time">May 26, 2020</div>
                                    </div>
                                </div>
                                <div class="stat">
                                    <div class="view-result">18 views </div>
                                    <div class="comment-result">0 comments</div>
                                </div>

                            </div>

                           <div class="article-detail">
                            <div class="group-content">
                                    <img class="fw" src="assets/image/bgs.jpg" alt="">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt fugit maxime velit quam perspiciatis ipsa nam esse quo vel, perferendis nostrum minus molestiae veritatis consequuntur non consectetur, odio doloremque adipisci.</p>
                                </div>
                           
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec-product float-left w-100 ptb-5">
            <div class="position-relative">
                <div class="container">
                    <div class="fw d-flex justify-content-between align-items-center">
                        <div class="group-content">
                            <h4>Related Product</h4>
                        </div>
                        <div class="group-content text-right">
                            <a href="vajascript:void(0);">See all</a>
                        </div>

                    </div>
                    <div class="row">
                        <?php for($i=0;$i< 4; $i++){ ?>
                        <div class="col-12 col-xl-3 col-md-6">
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
    <?php require_once('./inc/inc_footer.php')?>
    <?php require_once('./inc/inc_script.php')?>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>