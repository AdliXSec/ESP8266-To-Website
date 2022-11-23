<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="4" /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <title>Ultrasonik</title>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        setInterval(function(){
            $("#hasildata").load('dataout.php');
        }, 1000) ;
    });
</script>
<body>
    <div class="container" style="text-align: center; padding-top: 15%; width: 500px">
        <h2>Jarak Sensor Ultrasonik</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><span id="hasildata"></span> CM</h1>
            </div>
        </div>
    </div>
</body>
</html>