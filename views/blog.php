<?php $result = $tin->Blog(8); ?>
<div class="container">
    <div class="col-md-12">
        <div class="heading text-center">
            <h2>Thông Tin Từ Cửa Hàng</h2>
        </div>

        <p class="lead">Các tin tức công nghệ, hướng dẫn sử dụng, giới thiệu điện thoại, tin tức khuyến mãi từ hệ thống cửa hàng của chúng tôi sẽ được publish thường xuyên vào đây để thông tin và hỗ trợ quý vi
        </p>
        <!-- *** BLOG HOMEPAGE ***-->
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="img/<?= $row['urlHinh'] ?>" alt="" class="img-responsive" onerror="this.src='img/<?= BASE_URL ?>defaultImg.jpg'">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i>Xem tiếp</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html"><?= $row['TieuDe'] ?></a></h4>
                            <p>
                                <p class="intro"><?= $row['TomTat'] ?></p>
                                <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Xem tiếp</a>
                            </p>
                        </div>
                    </div>
                <!-- /.box-image-text -->
                </div>
            <?php } ?>
        <!-- /.row -->   
        </div>
    <!-- *** BLOG HOMEPAGE END *** -->
    </div>
</div>
