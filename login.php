
<!DOCTYPE html>
<html>
    <head>
        <title>
            Login-form
        </title>
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link href="form.css" rel="stylesheet" type="text/css">  
    
    </head>
    

    <body>
 
        <div  id="fo" class="panel panel-primary " >
<div class="panel-heading">LOGIN FORM</div>
<div class="text-warning"><i>*Login to continue</i></div>
<div class="panel-body">
    <form action="login_submit.php" method="POST">
        <input type="text" required placeholder=" USERNAME" name="username"><br><br>
        <input type="password"  required placeholder="  Password" name="password"><br><br>
        <button type="submit" id="btn" class="btn-primary btn-block">Login</button><br><br>
    </form>
</div>

            
        </div>
        
       
    >        </body>
        </html>
