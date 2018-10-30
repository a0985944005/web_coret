
<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
<style>
    .google-maps {
        position: relative;
        padding-bottom: 100%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 120% !important;
        height: 80% !important;
    }
</style>

  

	
	<section id="content">

	
	

	
		<!-- Portfolio Projects -->
		<div class="container marginbot50" align = "center">
		<div class="row" align = "center" >
		
			
				<h2 style = "color: #083b67;">公司資訊</h2>
				<h3 style = "font-family: 'Pinyon Script', cursive !important; ">Company Information</h3>
				<img src = "application/views/theme/img/top.png" class="img-responsive"><hr>

				
				
				<div  style="width : 65%; " >
				
					<div class = "col-sm-6" align="left">
							<h3 style = "font-family: 'Pinyon Script', cursive !important; ">聯絡資訊 Our Information</h3>
							<?=$html_data['content'];?>
							
						</div>
						
						<div class = "col-sm-6" align="right">
						<div class="google-maps">
							<iframe  width="600" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台中市忠明南路902號&z=16&output=embed&t=></iframe>
						</div>
						</div>
			
				</div>

				<br>
				
				
			
			

			
				
				

			</div>
			<hr><img src = "application/views/theme/img/bottom.png" class="img-responsive">
		</div>
		
		
		
		<!-- divider -->
	 <div  style = "text-align: center;    "">
								<a style = "border: 2px solid #DEDEDE;
			    border-radius: 2px;
			    color: #7E7B7B;
			    display: inline-block;
			    font: 11px/34px 'Open Sans',sans-serif;
			    min-width: 80px;

			    text-decoration: none;
			    padding: 0 20px;
			    outline: 0;
			    margin-top: 30px;"" href="index.php/front_index/index/index" >Back</a>
				</div>
		<!-- end divider -->
		
		<!-- clients -->
		
	
	</section>
