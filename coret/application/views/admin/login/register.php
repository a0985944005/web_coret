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

    <!-- 表單驗證css -->
  <link rel="stylesheet" href="application/views/theme/register/css/bootstrapValidator.css" />
  <!-- 中文js -->
  <script type="text/javascript" src="application/views/theme/register/js/zh_TW.js"></script>
    
    <script src="application/views/theme/js/jquery.min.js"></script>

  
  

    <title>O&C</title>
    
						
<style type="text/css">

label{
    color:#fff;
}
    
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

 }   

</style>
    
</head>
<body >
             
                    

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
                        			<h1>O&C</h1>
                                    <h3 style="text-align:center;color:#fff;">若已完成註冊可點選<a href="index.php/front_login/index/index">登入</a></h3>
									 <!-- <? if($login_error!=''){?><div style="color:#F00; font-size:14px;">※帳戶或密碼錯誤或者是權限不符</div><? };?>   -->                                  

                        		</div>
                        		<div class="form-top-right">
                        			<!-- <img style="vertical-align:middle;"  src="application/views/img/logo.png"> -->
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form id="defaultForm" method="post" class="form-horizontal" action="index.php/front_login/register_insert">
                        <div class="form-group">
                            <label class="col-lg-12" >姓名</label>
                            
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="name"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-12">帳號</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="account" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12">信箱</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="email" />
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="col-lg-12">密碼</label>
                            <div class="col-lg-12">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-12">重複輸入密碼</label>
                            <div class="col-lg-12">
                                <input type="password" class="form-control" name="confirmPassword" />
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="col-lg-12">連絡電話</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="phone" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-12 ">身分證字號</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="uid" />
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-lg-12 ">緊急連絡人電話</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="recommender_id" />
                            </div>
                        </div>

                        

                       

                       

                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">送出</button>
                                <!-- <button type="button" class="btn btn-info" id="validateBtn">Manual validate</button> -->
                            </div>
                        </div>
                    </form>
                                
		                    </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>


        <!-- Javascript -->
         <!-- 表單驗證js -->
  <script type="text/javascript" src="application/views/theme/register/js/bootstrapValidator.js"></script>
  
  <!-- <script src="application/views/theme/js/bootstrap.js"></script> -->
  
        <script src="application/views/theme/login/js/jquery.backstretch.min.js"></script>
        <script src="application/views/theme/login/js/scripts.js"></script>

        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        <script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                
                name: {
                    validators: {
                        notEmpty: {
                            message: '姓名必須填寫'
                        }
                    }
                },
                account: {
                    message: 'The account is not valid',
                    validators: {
                        notEmpty: {
                            message: '帳號必須填寫'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '帳號至少六個字'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '不可使用特殊符號'
                        },

                        threshold :  6 , //至少6個字後開始驗證

                       remote: {
                           type:'POST',
                           url: 'index.php/front_login/register_account',
                           message: '帳號已存在',
                           delay :  2000,  //每2秒一次
                       },
                        different: {
                            field: 'password',
                            message: '帳號不可與密碼相同'
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: {
                            message: '請輸入有效信箱'
                        },
                        remote: {
                           type:'POST',
                           url: 'index.php/front_login/register_email',
                           message: '信箱已註冊',
                           delay :  2000,  //每2秒一次
                       },
                        notEmpty: {
                            message: '信箱必須填寫'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '密碼必須填寫'
                        },
                        // identical: {
                        //     field: 'confirmPassword',
                        //     message: '確認錯誤'
                        // },
                        // different: {
                        //     field: 'account',
                        //     message: '密碼不可與帳號相同'
                        // }
                    }
                },
                confirmPassword: {
                    validators: {
                        notEmpty: {
                            message: '必須填寫'
                        },
                        identical: {
                            field: 'password',
                            message: '兩次輸入不同'
                        },
                        // different: {
                        //     field: 'account',
                        //     message: '密碼不可與帳號相同'
                        // }
                    }
                },
                phone: {
                    message: 'The phone is not valid',
                    validators: {
                        notEmpty: {
                            message: '電話必須填寫'
                        },
                        stringLength: {
                            min: 9,
                            max: 30,
                            message: '至少9個字'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '不可使用特殊符號'
                        },
//                        remote: {
//                            url: 'remote.php',
//                            message: 'The username is not available'
//                        },
                        
                    }
                },
                uid: {
                    message: 'The uid is not valid',
                    validators: {
                        notEmpty: {
                            message: '身分證字號必須填寫'
                        },
                        stringLength: {
                            min: 10,
                            max: 30,
                            message: '身分證字號至少10個字'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '不可使用特殊符號'
                        },
//                        remote: {
//                            url: 'remote.php',
//                            message: 'The username is not available'
//                        },
                        
                    }
                },
                
                
                
            }
        })
        .on('error.form.bv', function(e) {
            console.log('error.form.bv');

            // You can get the form instance and then access API
            var $form = $(e.target);
            console.log($form.data('bootstrapValidator').getInvalidFields());

            // If you want to prevent the default handler (bootstrapValidator._onError(e))
            // e.preventDefault();
        })
        .on('success.form.bv', function(e) {
            console.log('success.form.bv');

            // If you want to prevent the default handler (bootstrapValidator._onSuccess(e))
            // e.preventDefault();
        })
        .on('error.field.bv', function(e, data) {
            console.log('error.field.bv -->', data);
        })
        .on('success.field.bv', function(e, data) {
            console.log('success.field.bv -->', data);
        })
        .on('status.field.bv', function(e, data) {
            // I don't want to add has-success class to valid field container
            data.element.parents('.form-group').removeClass('has-success');

            // I want to enable the submit button all the time
            data.bv.disableSubmitButtons(false);
        });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });
});
</script>

    
</body>
</html>
<!--[if lte IE 10]>
<script> alert('瀏覽器版本老舊，為求完美使用環境，請更新瀏覽器或使用google瀏覽器。') 
document.location.href="http://csie.ncut.edu.tw/";
</script>
<![endif]-->

