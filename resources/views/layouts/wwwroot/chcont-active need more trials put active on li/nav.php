<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="assets/main.js"></script>
<script>
    
$(function(){
    $("nav ul li a").click(function(){
     $(this).addClass("active").siblings().removeClass("active");
       
    });
    
});    
</script>
</head>
    <body>
                <nav>
                    <ul>
                        <li id="iamhere" class="active"  ><a href="content1" >Article I</a></li>
                        <li id="nav_ii"><a href="ii.php">Article II</a></li>
                        <li id="nav_iii"><a href="iii">Article III</a></li>
                        <li id="nav_iv"><a href="iv">Article IV</a></li>
                        <li id="nav_v"><a href="v">Article V</a></li>
                        <li id="nav_vi"><a href="vi">Article VI</a></li>
                        <li id="nav_vii"><a href="vii">Article VII</a></li>
                        <li id="nav_amendments"><a href="amendments">Amendments</a></li>
                    </ul>
                </nav>
    
    </body>
    </html>