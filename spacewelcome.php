<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/190/190298.png" type="image/x-icon">
    <title>Space Station Management</title>
    <style>
        body {
	background-image: url(https://www.rxwallpaper.site/wp-content/uploads/space-star-backgrounds-wallpaper-cave.jpg);
	color:  white;
	min-height: 100vh;
	margin: 0;
	font-family: sans-serif;
}
.title{
	font-size: 60px;
	display: flex;
	color:white;
	justify-content: center;
}
.title img{
	width:100px;
	margin-right: 20px;
}
.container {
	margin: 3.5vw;
	min-height: 350px;
	background-color: rgb(13, 0, 87);
	border-style: solid;
	border-width: 0px;
	border-color: rgba(190, 190, 190, 0.3);
	border-radius: 10px;
	backdrop-filter: blur(20px);
	display: flex;
	flex-direction: row;
}

.card {
	text-align: center;
	margin: 2.0vw;
	padding: 0.5vw;
	min-height: 5vw;
	width: 20vw;
	height: 300px;
	background-color: #543cbe;
	box-shadow: -2rem 0 3rem -2rem #000;
	color: black; 
	border-style: solid;
	border-width: 0px;
	border-color: #3333;
	border-radius: 10px;
	backdrop-filter: blur(10px);
	font-family: 'Poppins', sans-serif;
	flex-grow: 1;
	flex-shrink: 1;
	word-wrap: break-word;
	overflow: hidden;
	text-overflow: ellipsis;
	transition: .3s ease all;
}
.card a{
	text-decoration: none;
	color: black;
}
.card img{
	display: block;
	margin:20px auto;
	width:120px;
	color: white;
}

.card:hover {
	transform: scale(1.03);
}

    </style>
</head>
<body>

    <h1 class="title"><img src="https://cdn-icons.flaticon.com/png/512/3049/premium/3049584.png?token=exp=1642151944~hmac=6ef237324876a6ecae21b50912411082" width="50px" alt=""> Space Station Management</h1>
    <div class="container" id="ctn_1">
        <div class="card"><a href="crewpage.php">
            <img src="https://cdn-icons-png.flaticon.com/512/2086/2086437.png" alt="#">
            <h1>CREW</h1>
        </a>
        </div>
        <div class="card"><a href="station.php">
            <img src="https://cdn-icons-png.flaticon.com/512/4657/4657437.png" alt="employee image" >
            <h1>SPACE STATION</h1>
            <a>
        </div>
        <div class="card"><a href="comp.php">
            <img src="https://cdn-icons-png.flaticon.com/512/4862/4862452.png" alt="route image" >
            <h1>COMPONENT</h1>
         <a>
        </div>
        <div class="card"><a href="base.php">
            <img src="https://cdn-icons-png.flaticon.com/512/4231/4231885.png" alt="customer image">
            <h1>BASE STATION</h1>
        </a>
        </div>
        <div class="card"><a href="provide.php">
            <img src="https://cdn-icons-png.flaticon.com/512/3410/3410370.png" alt="provide image">
            <h1>COMPONENTS PROVIDED</h1>
        </a>
        </div>
    </div>
</body>
</html>