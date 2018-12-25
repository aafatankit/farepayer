<?php
include 'connectdb.php';

if($con){
    $q="select * from city";

    $result=mysqli_query($con,$q);
    
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <form>
        <div class="form-group">
            <label for="sel1">Select list (select one):</label>
            <select class="form-control" id="sel1">
                <?php
                while($row=mysqli_fetch_array($result)){
                    echo '<option>'.$row['CityName']'</option>';
                }
                ?>
            </select>
            <br>
        </div>
    </form>
</body>
</html>
