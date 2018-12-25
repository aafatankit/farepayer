<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        ul{
            background-color: #eee;
            cursor: pointer;
        }
        li{
            padding: 12px;
        }
    </style>
</head>

<body> 
    <div class="container">
        <h1 class="text-center">City List</h1>
        <label>Destinations</label>
        <input type="text" name="city" id="city" class="form-control" placeholder="Search">
        <div id="cityList">
        </div>
    </div>
    
    
    <script>
        $(document).ready(function(){
            $('#city').keyup(function(){
                var query = $(this).val();
                if(query != ''){
                    $.ajax({
                        url:"search.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data){
                            $('#cityList').fadeIn();
                            $('#cityList').html(data);
                        }
                    });
                }
                else{
                    $('#cityList').fadeOut();
                    $('#cityList').html("");
                }
            });
            $(document).on('click','li',function(){
                $('#city').val($(this).text());
                $('#cityList').fadeOut();
            });
        });
    </script>
</body>
</html>



