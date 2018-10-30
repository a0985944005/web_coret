<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="zh-TW" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="zh-TW" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="zh-TW"><!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <base href="<? echo base_url()?>"/>

        <!-- CSS -->
        <link rel="stylesheet" href="application/views/theme/bootstrap/bootstrap.min.css">
    <link type="text/css" href="application/views/theme/font-awesome/css/font-awesome.min.css" rel="stylesheet">       				 <!-- Font Awesome -->
        
		<link rel="stylesheet" href="application/views/theme/login/css/form-elements.css">
        <link rel="stylesheet" href="application/views/theme/login/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    <title>勤益科技大學實驗室維修系統</title>
    
   	<script type="text/javascript" src="application/views/theme/assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
    <script type="text/javascript" src="application/views/theme/assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
    <script type="text/javascript" src="application/views/theme/assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->

    
</head>
<body>


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">                       
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>勤益科技大學</h3>
                            		<p>實驗室維修系統</p>
									<? if($login_error!=''){?><div style="color:#F00;">※帳戶或密碼錯誤或者是權限不符</div><? };?>                                   

                        		</div>
                        		<div class="form-top-right">
                        			<img style="vertical-align:middle;"  src="application/views/img/csie.png">
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php/login_csie/login" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="account" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Login</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="application/views/theme/login/js/jquery.backstretch.min.js"></script>
        <script src="application/views/theme/login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    
</body>
</html>