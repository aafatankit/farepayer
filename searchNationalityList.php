<?php
include 'connect.php';
if($con){
    if(isset($_POST['query'])){
        $output = '';
        $query = "select * from hotelNationalityCode where countryName LIKE '".$_POST['query']."%' Limit 15";
        $result = mysqli_query($con,$query);
        $avail = mysqli_num_rows($result);
        $output = '<ul class="list-unstyled">';
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
                $output .= '<li>'.$row['countryName'].'</li>';
            }
        }
        else{
            $output .= '<li>Not Found!</li>';
        }
        $output .= '</ul>';
        echo $output;
    }
}

?>
