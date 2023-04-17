<?php
$host = "localhost";
$user = "root";
$password ="";
$database = "space";

$sid = "";
$sname= "";
$date = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <title>SPACE MANAGEMENT</title>
</head>
<body>
    <div class="container">
    

  <tbody>
<?php
session_start();

$sql="Select * from station  " ;
$result=mysqli_query($connect,$sql);
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo '<table class="table table-bordered table-striped">';
            echo "<thead>";
                echo "<tr>";
                    echo "<th>space ID</th>";
                    echo "<th>SPACE NAME</th>";
                    echo "<th>DATE</th>";
                    
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['sid'] . "</td>";
                    echo "<td>" . $row['sname'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                   
                    echo "<td>";
                echo "</tr>";
            }
            echo "</tbody>";                            
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}

?>

  </tbody>
</table>
</div>
</body>
</html>