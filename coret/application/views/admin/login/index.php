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
         <link rel="stylesheet" href="application/views/theme/css/bootstrap.css" />

      				 <!-- Font Awesome -->
        
		<link rel="stylesheet" href="application/views/theme/login/css/form-elements.css">
        <link rel="stylesheet" href="application/views/theme/login/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
 <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="application/views/theme/js/jquery.min.js"></script>

    <title></title>
    
						
<style type="text/css">
    
.btn_sign {
    width: 30%;
    height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #de615e;
    border: 0;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;

</style>
    
</head>
<body>
             
                    

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">                       
                    </div>
                    
                    <div class="row">
                    
                        <div class="col-md-4 col-md-offset-4 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h1>CoreT </h1>
                            		<p>芯億服裝設計開發管理系統</p>
									 <? if($login_error!=''){?><div style="color:#F00; font-size:14px;">※帳戶或密碼錯誤</div><? };?>

                                    

                                       

                                     

                        		</div>
                        		<div class="form-top-right">
<!--                         			<img style="vertical-align:middle;"  src="application/views/img/logo.png">
 -->                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php/admin_login/login" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">帳號</label>
			                        	<input type="text" name="email" placeholder="帳號..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">密碼</label>
			                        	<input type="password" name="password" placeholder="密碼..." class="form-password form-control" id="form-password">
			                        </div>
                                    <br> 
			                        <button type="submit" class="btn" style="background:rgba(0, 0, 0, 0.4);">Login</button>
                                    <br> 
                                    <div class="text-center">
                                   
                                        
                                    </div>
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
<!--[if lte IE 10]>
<script> alert('瀏覽器版本老舊，為求完美使用環境，請更新瀏覽器或使用google瀏覽器。') 
document.location.href="http://csie.ncut.edu.tw/";
</script>
<![endif]-->

