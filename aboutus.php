<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NETCAMP || FEEDBACK </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="row header">
<div class="col-lg-3">
<h1 style="color:orange;">Test Your Skill</h1></div>
<div class="col-md-2">
</div>
<div class="col-md-8">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?>

<a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
</div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->
<div class="bg">
<div class="bg1">
<div class="row">
<div class="col-md-4"></div>

<div class="col-md-7 panel" style="background-image:url(image/bg123.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo';color:#000066">Rules for exam</h2>
<div style="font-size:20px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo'
<h4>1.Every user should register using email-id and password.</h3>
<h4>2.There will be questions based on topics you can choose,</h3>
<ul>
  <li>C++</li>
  <li>Java</li>
  <li>.C</li>
  <li>php</li>
</ul>
<h4>3.Every question will be having 4 options,you juct need to click on the button parallel to correct answer options and click submit button</h4>
<h4>4. After finishing all question your result will be displayed</h4>
<h4>5.you can check your ranking with other student by clicking on ranking button</h4>
<h4>6.You can check your previosly did test also by going to history<h4>
</form>';}?>
<h2 align="center" style="font-family:'typo';font-size:20px;color:orange">All the best</h2>


</form>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div></div><!--container end-->


<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="aboutus.php" target="_blank">About quiz</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>

</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>

      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
      <img src="image/CAMtej121.jpg" width=100 height=100 alt="Tejaswini M R" class="img-rounded">
      <br>
      <br>
      <img src="image/CAMvis123.jpg" width=100 height=100 alt="vishnavi I N" class="img-rounded">
		 </div>
		 <div class="col-md-5">
       <a href="https://www.facebook.com/tejaswiniteju" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">tejaswiniteju</a>
       <a href="https://www.facebook.com/vaishnavi.irny" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">vishnavi_in</a>
   		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">7026919987</h4>
       <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">9483817158</h4>
   		<h4 style="font-family:'typo' ">tejaswinimr1@gmail.com</h4>
       <h4 style="font-family:'typo' ">usn=4BD16CS110</h4>
       <h4 style="font-family:'typo' ">vishnavi1@gmail.com</h4>
       <h4 style="font-family:'typo' ">usn=4BD16CS113</h4>
   		<h4 style="font-family:'typo' ">Bapuji institu of engineering and tech ,Davanagere</h4></div></div>
		</p>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
  <div class="form-group">
  <input type="text" name="uname" maxlength="20"  placeholder="Admin name" class="form-control"/>
  </div>
<div class="form-group">
<input type="text" name="ename" maxlength="20"  placeholder="Admin user id" class="form-control"/>
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
