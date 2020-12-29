<table><tr>
<?php
$color = 'black';
function printcolor($color, $nl) {

    echo '<td style="width:50px; height:50px; background:' . $color . '"></td>';
    if ($nl == true) {
        echo "</tr><tr>";
    }
}
for ($i=1; $i<=64;$i++) {
    if ($i % 8 == 0 && $color == "black") {
        $color = "white";
        $nl = true;
    } elseif ($i % 8 == 0 && $color == "white") {
        $color = "black";
        $nl = true;
    } elseif (isset($nl) && $nl == true) {      
        $nl = false;
    } elseif ($color == "black") {
        $nl = false;
        $color = "white";           
        } 
    elseif ($color == "white")  {
        $nl = false;
        $color = "black";
    }       
    printcolor($color, $nl);
}