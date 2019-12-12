<?php
$layout_class = newstore_blog_layout();
get_header();
do_action( 'newstore_before_blog_post');
?>
    <head>
        <style>
            .title-name{
                font: italic bold 20px Georgia,  sans-serif;
            }
            p.a {
                font-size:12pt;
                font-family: sans-serif, Bookman, Tahoma, Verdana;
            }

            p.b {
                font-size:12pt;
                font-family: sans-serif, Bookman, Tahoma, Verdana;
            }
        </style>
    </head>

    <section id="aa-catg-head-banner">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <marquee direction="left" height="80" style="color: RED;" behavior="alternate" ><h2> THÔNG TIN CỦA SHOP</h2></marquee>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2>GIỚI THIỆU SHOP</h2>
        <b><p class="a">Shop Tea là một sản phẩm được làm ra từ Wordpress. Bao gồm các chức năng cơ bản của một website bán hàng đơn giản.</p></b>
        <p class="b">Trà sữa là loại thức uống đa dạng được tìm thấy ở nhiều nền văn hóa,
            bao gồm một vài cách kết hợp giữa trà và sữa. Các loại thức uống khác nhau tùy thuộc vào lượng thành phần chính của mỗi loại, phương pháp pha chế, và các thành phần khác được thêm vào (thay đổi từ đường hoặc mật ong thành muối hoặc bạch đậu khấu-thảo quả).
            Bột trà sữa pha sẵn là một sản phẩm được sản xuất hàng loạt.</p>
    </div>
    <hr>
    <div class="container">
        <h2>GIỚI THIỆU THÀNH VIÊN</h2>
        <p class="title-name">PHẠM CÔNG HUY</p>
        <p class="b">. . .</p>
        <hr>
        <p class="title-name">NGUYỄN DIÊN SỸ ĐẠO</p>
        <p class="b">. . . </p>
        <hr>
        <p class="title-name">ĐỖ XUÂN NAM</p>
        <p class="b">. . .</p>
        <hr>
        <p class="title-name">LÊ NGUYỄN ANH BẰNG</p>
        <p class="b">. . .</p>
        <hr>
        <p class="title-name">LÊ NGỌC PHÁT</p>
        <p class="b">. . . </p>
        <hr>
    </div>
<?php
get_footer();

