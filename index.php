<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body  
{  
	
background-image:url("https://g.foolcdn.com/image/?url=https%3A//g.foolcdn.com/editorial/images/658494/futuristic-space-station-orbiting-earth.jpg&w=2000&op=resize"); 
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover; 
} 
form {
    width: 300px;
    margin: 0 auto;
}
*{

font-family: cursive;

box-sizing: padding-box;

}


h2 {

text-align: center;
color: white;
margin-bottom: 40px;
font-size:xx-large;

}

input {

display: block;

border: 2px solid #ccc;

width: 95%;

padding: 10px;

margin: 10px auto;

border-radius: 5px;

}


label {

color: white;
font: bold;

font-size: 25px;

padding: 10px;

}

button {

background:slateblue;

padding: 10px 15px;

color: #fff;

border-radius: 40px;

margin-right: 40px;

border: none;

}
.error{
    color: red;
}

</style>


<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" pattern="^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>