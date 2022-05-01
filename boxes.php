<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism</title>
    <link rel="stylesheet" href="style.css">
    <style>
         .image{
            position: absolute;
            opacity: 1.0;
            width:100%;
            height:100%;
            z-index: -2;
        }
        h1{
            color: yellow;
            text-align: center;
        }
        h4{
            text-align: center;
            color: rgb(117, 241, 117);
            font-size: 20px;
        }
      
        #div1{width:600px;
	height: 580px;
	padding:20px;
	margin:100px auto;
	box-shadow:0px 0px 10px 2px grey;
		background:grey;	}
#div1{
		position:relative;	
		/*right:400px;*/
		top:100px;
		
		border-radius:10px;	
		}
        #div2{width:600px;
	height: 580px;
	padding:20px;
	margin:100px auto;
	box-shadow:0px 0px 10px 2px grey;
		background:grey;		}
#div2{
		position:relative;	
		/*left:400px;*/
		top:100px;
		
		border-radius:10px;	
		}
#div2:hover{transform: scale(1.02);}
.tbl{
    border: 1px solid black;
}
a{
    cursor: pointer;
}
    </style>
</head>
<body style="background-color: #DEC9C5 ;">
 <!---- <img src="kott.jpeg" class="image" alt="iiitkottayam">-->
<h1>Welcome To The IIIT Kottayam Tourism Site</h1><br>
    <h4>We As a College, as an institute of national Importance Never Compromise with the entertainment needs of children
        do you have desire to visit different places in India?? then what are you waiting for?? Hop on and join Us.
    </h4>
    <table cellpadding="0px" cellspacing="30px">
   <tr><td id="div2">
        <h1 id="header" align="center" style="font-family:chiller;font-size:40;color:black">North India-Tour</h1>
        <p><a href="north.php"><img src="bg.jpg" width="500px" height="500px"></a></p>
        </td>
       <td id="div2">
        <h1 id="header" align="center" style="font-family:chiller;font-size:40;color:black">South India-Tour</h1>
        <p><a href="south.php"><img src="south.jpg" width="500px" height="500px"></a></p>
        </td></tr>
        <tr><td id="div2">
            <h1 id="header" align="center" style="font-family:chiller;font-size:40;color:black">West India-Tour</h1>
            <p><a href="west.php"><img src="west.jpg" width="500px" height="500px"></a></p>
            </td>
            <td id="div2">
            <h1 id="header" align="center" style="font-family:chiller;font-size:40;color:black">Himalayas-Tour</h1>
            <p><a href="himalayas.php"><img src="himalayas.jpg" width="500px" height="500px"></a></p>
            </td></tr></table>
</body>
</html>