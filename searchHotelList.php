<?php
include 'connect.php';
if($con){
    if(isset($_POST['query'])){
        $output = '';
        $query = "select * from hotelCityList where destinationName LIKE '%".$_POST['query']."%' order by popularity desc LIMIT 25";
        $result = mysqli_query($con,$query);
        $avail = mysqli_num_rows($result);
        $output = '<ul class="list-unstyled">';
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
                $output .= '<li value="'.$row['cityId'].'" id="'.$row['countryCode'].'">'.$row['destinationName'].'</li>';
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
