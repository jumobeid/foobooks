<!DOCTYPE html>
<html>
<!--
jQuery Tutorials: AJAX Load Content No Page Refresh
Codecourse
Codecourse 

jQuery Navigation Active Button
Martins Tutorials

-->


<head>
   <?php include("parts/htmlhead.php"); ?>
    </head>

<body id="part1">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
            <?php include("parts/header.php"); ?>  
            </div>
        </div>
        <div class="row">
            <div class="three columns">
            <?php include("parts/nav1.php"); ?>  
            </div>
            <div id="main"class="nine columns"></div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="assets/main.js"></script>
            
            
        </div>

        <div class="row">
            <div class="twelve columns">
            <?php include("parts/footer.php"); ?>   
            </div>
        </div>

    </div>
</body>

</html>