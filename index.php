<?php
/**
 * Created by PhpStorm.
 * User: kavykun
 * Date: 3/14/15
 * Time: 5:16 PM
 */
$pg = 'main';
if (isset($_GET['page'])) {

    if ($_GET['page'] == '') {

        $pg = $_GET['page'];

    } else {

        $pg = $_GET['page'];

    }//end else
}//end if
require('model/mysqli_connect.php'); // Connect to the db.

echo $_GET['username'];



?>
<!DOCTYPE html>
<html lang="en">
<?php include 'content/header.php'; ?>
<body>
<?php include 'content/menuright.php'; ?>
<div class="main">
    <div class="container">
        <!-- Jumbotron Header -->
        <div class="jumbotron box">
            <div class="mainnavi">
                <?php include 'content/mainnavi.php'; ?>
                </div>
            <!-- main content  -->
            <div class="maincontent vertical-offset-100">
                <?php include('content/' . $pg . '.php'); ?>
            </div>
            </div>
        <!-- Content Here -->
        </div>
    <!-- footer -->
    <div class="footer">
        <?php include 'content/footer.php'; ?>
        </div>
</div>
</body>
<!-- jQuery -->
<script src="js/jquery-2.1.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Script to Activate the Carousel -->
<script src="/js/indexpg.js"></script>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<script>
    $(document).ready(function () {
        //Events that reset and restart the timer animation when the slides change
        $("#transition-timer-carousel").on("slide.bs.carousel", function (event) {
            //The animate class gets removed so that it jumps straight back to 0%
            $(".transition-timer-carousel-progress-bar", this)
                .removeClass("animate").css("width", "0%");
        }).on("slid.bs.carousel", function (event) {
            //The slide transition finished, so re-add the animate class so that
            //the timer bar takes time to fill up
            $(".transition-timer-carousel-progress-bar", this)
                .addClass("animate").css("width", "100%");
        });

        //Kick off the initial slide animation when the document is ready
        $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
            .css("width", "100%");
    });
    $('.dropdown-toggle').click(function () {
        var location = $(this).attr('href');
        window.location.href = location;
        return false;
    });
    function htmlbodyHeightUpdate() {
        var height3 = $(window).height();
        var height1 = $('.nav').height() + 50;
        height2 = $('.main').height();
        if (height2 > height3) {
            $('html').height(Math.max(height1, height3, height2) + 10);
            $('body').height(Math.max(height1, height3, height2) + 10);
        }
        else {
            $('html').height(Math.max(height1, height3, height2));
            $('body').height(Math.max(height1, height3, height2));
        }

    }
    $(document).ready(function () {
        htmlbodyHeightUpdate();
        $(window).resize(function () {
            htmlbodyHeightUpdate()
        });
        $(window).scroll(function () {
            height2 = $('.main').height();
            htmlbodyHeightUpdate()
        });
    });
    $(document).ready(function () {
        $(document).mousemove(function (e) {
            TweenLite.to($('body'),
                .5,
                {
                    css: {
                        backgroundPosition: "" + parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / '12') + "px, " + parseInt(event.pageX / '15') + "px " + parseInt(event.pageY / '15') + "px, " + parseInt(event.pageX / '30') + "px " + parseInt(event.pageY / '30') + "px"
                    }
                });
        });
    });
</script>
</html>
