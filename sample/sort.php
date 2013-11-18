<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 18/11/2556
 * Time: 10:31 น.
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
.items {
    list-style: none;
    width: 420px;
    float: left;
    margin-left: 10px;
    -webkit-column-count: 3;
    -webkit-column-gap: 10px;
}
.items li {
    display: inline-block;
    background: #FEFEFE;
    border: 2px solid #FAFAFA;
    box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
    margin: 0 2px 15px;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    column-break-inside: avoid;
    padding: 15px;
    padding-bottom: 5px;
    background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
    opacity: 1;
    -webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;
}

.items li img {
    /*
    width: 100%;
    height: auto;
    */
}
</style>
<div class="container">
    <ul class="items"></ul>
</div>
<script type="text/javascript">
$(function(){
    var items = [
        "http://media.screened.com/uploads/0/5125/564536-ahmo_hight.jpg",
        "http://www.themoralofthestoryis.com/wp-content/uploads/2013/01/test.gif",
        "http://www.ct4me.net/images/dmbtest.gif",
        "http://www.letsgomobile.org/images/reviews/0102/samsung-camera-phone-test-photos.jpg",
        "http://givinginadigitalworld.files.wordpress.com/2012/06/test-for-great-digital-fundraising-content.jpg",
        "http://www.gogamestorm.com/wp-content/uploads/2011/01/100-Test.jpg",
        "http://img.alibaba.com/photo/1134947703/Pass_the_Pax_RN_Complete_Study_Guide_and_Practice_Test_Questions_by_Team_Complete_Test_Preparation_Paperback_.jpg",
        "http://b.vimeocdn.com/ps/588/58832_300.jpg",

        "http://www.themoralofthestoryis.com/wp-content/uploads/2013/01/test.gif",
        "http://www.ct4me.net/images/dmbtest.gif",
        "http://www.letsgomobile.org/images/reviews/0102/samsung-camera-phone-test-photos.jpg",
        "http://givinginadigitalworld.files.wordpress.com/2012/06/test-for-great-digital-fundraising-content.jpg",
        "http://www.gogamestorm.com/wp-content/uploads/2011/01/100-Test.jpg",
        "http://img.alibaba.com/photo/1134947703/Pass_the_Pax_RN_Complete_Study_Guide_and_Practice_Test_Questions_by_Team_Complete_Test_Preparation_Paperback_.jpg",
        "http://b.vimeocdn.com/ps/588/58832_300.jpg",

        "http://www.themoralofthestoryis.com/wp-content/uploads/2013/01/test.gif",
        "http://www.ct4me.net/images/dmbtest.gif",
        "http://www.letsgomobile.org/images/reviews/0102/samsung-camera-phone-test-photos.jpg",
        "http://givinginadigitalworld.files.wordpress.com/2012/06/test-for-great-digital-fundraising-content.jpg",
        "http://www.gogamestorm.com/wp-content/uploads/2011/01/100-Test.jpg",
        "http://img.alibaba.com/photo/1134947703/Pass_the_Pax_RN_Complete_Study_Guide_and_Practice_Test_Questions_by_Team_Complete_Test_Preparation_Paperback_.jpg",
        "http://b.vimeocdn.com/ps/588/58832_300.jpg",

        "http://media.screened.com/uploads/0/5125/564536-ahmo_hight.jpg"
    ];

    var list1 = $(".items:eq(0)");
    list1.css({ background: "red" });
    //list2.css({ background: "blue" });


    (function(){
        for(var i in items){
            var img = new Image();
            $(img).attr("src", items[i]);
            items[i] = img;

            var li = $("<li></li>");
            li.append(img);

            list1.append(li);
        }
    }());
});
</script>
</body>
</html>