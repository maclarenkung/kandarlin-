<?php require_once('./inc/inc_meta.php')?>

<body>
    <?php  require_once('./inc/inc_header.php')?>
    <div class="wrapper">

        <div class="sec-detail float-left w-100 ">
            <div class="position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lx-7 col-md-6">
                            <div class="group-content">
                                <img class="fw"
                                    src="https://images.unsplash.com/photo-1596644462600-09abbe12a802?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1451&q=80"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lx-5 col-md-6">
                            <div class="group-content">
                                <h1>Name Product</h1>
                                <h4><small>฿ 67.24</small></h4>
                            </div>
                            <div class="group-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facere assumenda
                                    doloremque dolorem, pariatur vero ipsum earum. Eius nobis animi, cumque maxime
                                    aliquam maiores et quo. Voluptates adipisci vel ullam!</p>
                            </div>
                            <div class="group-content">
                                <a href="vajascript:void(0);" class="btn">+ Add To Cart</a>
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
                        <div class="group-content text-md-right">
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