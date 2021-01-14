
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>PHP GURUKUL | How to encrypt Password on CLient Side </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<script>
     function encrypt()
	 {
        var pass=document.getElementById('password').value;
		var hide=document.getElementById('hide').value;
		
		if(pass=="")
		{
		   document.getElementById('err').innerHTML='Error:Password is missing';
		   return false;
		}
		else 
		{
		   document.getElementById("hide").value = document.getElementById("password").value;
		   var hash = CryptoJS.MD5(pass);
		   document.getElementById('password').value=hash;
		  return true;
		}
	}	
</script>
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="http://www.phpgurukul.com/">Home</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://www.phpgurukul.com/all-demos/">All Demos</a></li>
			<li><a href="http://www.phpgurukul.com/category/php-projects/">Free Projects</a></li>
			<li><a href="http://www.phpgurukul.com/contact-us/">Contact</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutorials <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.phpgurukul.com/category/php/">PHP </a></li>
                <li><a href="http://www.phpgurukul.com/category/php-oops-concepts/">PHP OOPs</a></li>
                <li class="divider"></li>
                <li><a href="http://www.phpgurukul.com/category/php-data-object/">PDO</a></li>
                <li class="divider"></li>
                <li><a href="http://www.phpgurukul.com/category/inteview-ques-ans/">Interview QA</a></li>
              </ul>
            </li>
		</ul>
		
	</div>
</nav>

<div class="container-fluid">
  
      
      
     
 <!--/left-->
  <!--center-->
  <div class="col-sm-9">
    <div class="row">
      <div class="col-xs-12">
        <h3>Password Encryption on Client Side using javascript</h3>
		<hr >
		<form class="form-signin" method="post" name="signin" id="signin">       
 <input type="password"  name="password" id="password" class="form-control" placeholder="Password" id="password" value=""  /> 
 <input type="hidden" name="hide" id="hide" />
 <div style="color:red" id="err"></div><br />
<input type="submit" name="login"  type="submit" onclick="return encrypt()" value="submit"  >
      </form>
 
      </div>
    </div>
  
        
   
  </div><!--/center-->
<!--right-->
  <div class="col-sm-3">
  
    	<div class="panel panel-default">
         	
         	<div class="panel-body" align="center">
         		
         	</div>
        </div>
    
      
     
  </div>
<!--/right-->
 
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>