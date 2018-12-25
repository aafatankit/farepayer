<?php
include 'connect.php';


    if(isset($_POST['query'])){
//        $output = '';
        $query = "select * from country where Name LIKE '%".$_POST['query']."%'";
        $result = mysqli_query($con,$query);
        $avail = mysqli_num_rows($result);
        $output = '<ul class="list-unstyled">';
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
                $output = $output.'<li>'.$row['Name'].'</li>';
            }
//            for($i=0;$i<$avail;$i++){
//                $row=mysqli_fetch_array($result);
//                $output = $output.'<li>'.$row['Name'].'</li>';
//            }
        }
        else{
            $output .= '<li>Not Found!</li>';
        }
        $output .= '</ul>';
        echo $output;
    }


?>