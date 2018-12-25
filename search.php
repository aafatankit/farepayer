<?php
include 'connect.php';

if($con){
    if(isset($_POST['query'])){
        $output = '';
        $query = "select * from city where CityName LIKE '%".$_POST['query']."%'";
        $result = mysqli_query($con,$query);
        $output = '<ul class="list-unstyled">';
        if(mysqli_num_rows($result > 0){
            while($row=mysqli_fetch_array($result)){
                $output = $output.'<li>'.$row['CityName'].'</li>';
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