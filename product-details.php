<?php
    include('config.php');
    session_start();
    $pid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Plot-details</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
  <nav id="navbar" style="background-color:#007bff;" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand" href="#"><strong>BhuPlots</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
    </div>
</nav>
<?php
    $details = "SELECT * FROM plot WHERE id = '$pid';";
    $details_result = mysqli_query($con,$details) or die(mysqli_error($con));
    $details_row = mysqli_fetch_assoc($details_result);
?>
    <div class="row" style="background:url(assets/img/pad.png)">
        <div class="col">
            <div class="x_001_laptop_main_wrap">
                <div class="row">
                    <div class="col-md-7">
                        <div class="x_001_laptop_inner_wrap"><img src="assets/img/x_001_laptop_img.png" alt="x_001_laptop_img">
                            <div id="x_001_laptop" class="carousel slide x_001_laptop_indicators x_001_laptop_control_button thumb_scroll_x swipe_x ps_easeOutQuad" ride="carousel" data-pause="hover" data-interval="8000"
                                data-duration="2000">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#x_001_laptop" data-slide-to="0"></li>
                                    <li data-target="#x_001_laptop" data-slide-to="1"></li>
                                    <li data-target="#x_001_laptop" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img src="admin/plots-images/<?php echo $details_row['image1']; ?>" alt="x_001_laptop_01"></div>
                                    <div class="carousel-item"><img src="admin/plots-images/<?php echo $details_row['image2']; ?>" alt="x_001_laptop_02"></div>
                                    <div class="carousel-item"><img src="admin/plots-images/<?php echo $details_row['image3']; ?>" alt="x_001_laptop_03"></div>
                                </div>
                            </div><a class="carousel-control-prev" href="#x_001_laptop" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="carousel-control-next" href="#x_001_laptop" data-slide="next"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                    <div class="col-md-5">
                        <h1><?php echo $details_row['location']; ?></h1>
                        <p style="color: black;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa. Integer ut purus ac augue commodo commodo. Nunc
                            nec mi eu justo tempor consectetuer. Etiam vitae nisl.</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 0px;height: auto;">
        <div class="col" style="padding: 0px;height: auto;">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true" href="#item-1-1">Plot details</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" id="item-1-2-tab" data-toggle="tab" role="tab" aria-controls="item-1-2" aria-selected="false" href="#item-1-2">Second Item</a></li>
                        <li class="nav-item"><a class="nav-link" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-3" aria-selected="false" href="#item-1-3">Third Item</a></li> -->
                    </ul>
                </div>
                <div class="card-body">
                    <div id="nav-tabContent" class="tab-content">
                        <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                            <p>
                                <ul>
                                    <li><?php echo $details_row['name']; ?></li>
                                    <li><?php echo $details_row['org']; ?></li>
                                    <li><?php echo $details_row['location']; ?></li>
                                    <li><?php echo $details_row['type']; ?></li>
                                    <li><?php echo $details_row['price']; ?></li>
                                </ul>
                            </p><button class="btn btn-primary" type="button">Button</button></div>
                        <!-- <div
                            id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
                            <h4>Second Item Title</h4>
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
                    <div
                        id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab">
                        <h4>Third Item Title</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div> -->
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>