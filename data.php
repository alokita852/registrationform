<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    body
    {
        background-color:pink:
    }
    .firstpart{
        height: 500px;
        width: 400px;
        border: 2px solid black;
    }
    .first{
        margin:15px;
        padding:10px;
    justify-content:center;
    text-align:center;
    align-items:center;
    margin-left:110px;
    }
    .second{
        /* align-items:center; */
        height: 40px;
    width: 80px;
    text-align:center;
    margin-left:160px;
    /* justify-content:center; */
    }
    .head{
        text-align:center;
    }

    </style>
</head>
<body>
<Form action="registraion.php" method="post">
     <div class="firstpart">
         <h1 class="head">Registration Form</h1>
         <input class="first" type="text" name = " name" placeholder="Enter username"><br>
         <input class="first" type="email"  name="email"  placeholder="Enter your email"><br>
         <input class="first" type="text" name="age" placeholder="Enter Your Age"><br>
         <input class="first" type="text"name="course" placeholder="Enter Your Course"><br>
        
         <input class="second" type="submit" name="submit">
        
        
     </div>
     </Form>
    
</body>
</html>