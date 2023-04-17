<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "space";

$cid = "";
$cname = "";
$gender = "";
$age = "";
$sid="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['cid'];
    $posts[1] = $_POST['cname'];
    $posts[2] = $_POST['gender'];
    $posts[3] = $_POST['age'];
    $posts[4] = $_POST['sid'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM `crew` WHERE `cid` LIKE '$data[0]'";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $cid = $row['cid'];
                $cname = $row['cname'];
                $gender = $row['gender'];
                $age = $row['age'];
                $sid = $row['sid'];
            
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    
    $insert_Query = "INSERT INTO `crew`(`cid`,`cname`,`gender`,`age`,`sid`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
    $insert_Result = mysqli_query($connect, $insert_Query);
    
    try{
        if($data[3]<0){
            echo '<script>alert("age cannot be negative")</script>';
        }
        if($insert_Result)
        {
          
            if(mysqli_affected_rows($connect)>0)
            {
                echo '<script>alert("Data Inserted")</script>';
            }
            else{
                echo 'Data Not Inserted';
            }
        
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `crew` WHERE `cid` LIKE '$data[0]'";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo '<script>alert("Data deleted")</script>';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `crew` SET `cname`='$data[1]',`gender`='$data[2]',`age`=$data[3],`sid`='$data[4]' WHERE `cid` LIKE '$data[0]'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo '<script>alert("Data updated")</script>';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


<!DOCTYPE Html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
       <style>
          body {
	background-image: url(https://www.rxwallpaper.site/wp-content/uploads/space-star-backgrounds-wallpaper-cave.jpg);
	 color:  white;
	min-height: 100vh;
	margin: 0;
	font-family: sans-serif;
}
h1{
    color: white;
    display:flex;
    justify-content: center;
    margin: 100px;
    padding-top: 40px;
}
.container{
    display:flex;
    justify-content: center;
    margin-top: 100px;
}
.card{
    margin:20px;
}
       </style>
        
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <centre>
    <body>
    <h1>CREW DETAILS</h1>   
    <div class="container">
 
        <form action="crewpage.php" method="post">
            <input type="text" name="cid" placeholder="cid" value="<?php echo $cid;?>"><br></br>
            <input type="text" name="cname" placeholder="cname" value="<?php echo $cname;?>"><br></br>
            <input type="text" name="gender" placeholder="gender" value="<?php echo $gender;?>"><br></br>
            <input type="number" name="age" placeholder="age" value="<?php echo $age;?>"><br></br>
            <input type="text" name="sid" placeholder="sid" value="<?php echo $sid;?>"><br></br>
            <div>
                 <!-- Input For Add Values To Database-->
                 <input type="submit" name="insert" value="INSERT">
                
                 <!-- Input For Edit Values -->
                <input type="submit" name="update" value="UPDATE">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="DELETE">
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="SEARCH">
        

            </div>
            <div class="card" style="width: 18rem;">
     
                <div class="card-body">
                    <h5 class="card-title">VIEW</h5>
                    <p class="card-text"></p>
                    <a href="crewview.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
        </form>
    </div>
    </body>
    
</html>