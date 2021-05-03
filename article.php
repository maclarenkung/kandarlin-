<?php require_once('./inc/inc_meta.php')?>

<body>
    <?php  require_once('./inc/inc_header.php')?>
    <div class="wrapper">
        <div class="sec-banner fw pt-4">
            <img class="fw" src="/assets/image/bg-banner.jpg" alt="">
            <div class="banner-title">
                <div class="group-content text-md-left text-center">
                    <h1><strong>News & Articles</strong></h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News & Articles</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="sec-article-card fw ptb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <?php for($i=0;$i < 3; $i++){ ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img class="fw" src="/assets/image/bg-article.jpg" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <div class="group-content">
                                            <h3>Articles Name</h3>
                                        </div>
                                        <div class="group-content">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, nemo?
                                                Vitae
                                                magnam provident quo laborum perspiciatis, minima exercitationem dicta
                                                dolorem ipsa voluptas totam corrupti! Fuga voluptatem similique in
                                                accusantium sed.</p>
                                            <hr>
                                        </div>

                                        <div class="content-creater">

                                            <div class="thumb-nails">
                                                <img src="/assets/image/bg-welcome.jpg" alt="">
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

                                        <div class="block-btn-bottom">
                                            <a href="javascript:void(0);" class="btn">READ MORE </a>
                                        </div>
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