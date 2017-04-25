
<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() {
        $this->model = "VW";
        $this->make = "us";
        $this->color = "white";
    }
}
// create an object
$herbie = new Car();

// show object properties
function start(){
//echo $herbie->model;
//echo $herbie->make;  
//echo $herbie->color;
    return "ready!"
}
start();
?>

</body>
</html>