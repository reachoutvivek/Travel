<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIITK Tourism</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2{
            color: yellow;
            text-align: center;
        }
        .image{
            position: absolute;
            opacity: 1.0;
            width:100%;
            height:100%;
            z-index: -2;
        }
        .input{
            border: solid red;
            border-width: 4px;
            
        }
        .btn{
            cursor: pointer;
        }
        .xyx{
            margin-top: 50%;
        }
        /*.anchor{
            padding: 10px 20px;
            background-color: aqua;
            text-decoration: none;
            margin-left: 10% auto;
            margin-top: 2%;            
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
                
        }*/
    </style>
</head>
<body>
    <section></section>
    <img class="image" src="bg1.jpg" alt="iiitkottayam">
    <table><tr><td height="50&"></td></tr><tr><td height="50&"></td></tr><tr><td height="50&"></td></tr></table>
    <div class="xyz">
    <h2>Login Form</h2>
    <form method="post" action="boxes.php">
        <input type="email" name="email" id="email" placeholder="Enter your username">
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <button class="btn">Submit</button>
       <!---- <a class="anchor" href="boxes.html">Submit</a>-->
        </form>     
    </div>
</body>
</html>