notification();
setInterval("notification()", 10000); 

function notification(){

	$.ajax({ 
			type: "POST",
			url: "index.php/csie_message/header_mService",
			dataType: "json",
			success: function(data) 
			{
				
				var leght=data.length;
				  var count = 0;
				  $("#notic").empty();
				  for(var i=0;i<leght;i++)
				  {
						if(data[i].fix_read_type=='unread')
							{
								count++;
								$("#notic").append( "<li class='media notification-teal' style='background:#f8f8f8;'><a href='index.php/csie_lab_device_fix/index/return/"+data[i].fix_id+"' ><div class='media-left'><span class='notification-icon'><i class='fa  fa-exclamation-triangle'></i></span></div><div class='media-body'><h4 class='notification-heading'>"+data[i].lab_name+"教室<br />設備名稱："+data[i].device_name+"<br />設備編號："+data[i].device_number+"<br />位置："+data[i].device_position+"</h4><span class='notification-time'>申請時間："+data[i].fix_date+"</span></div></a></li>");
		
							}
						else
							{
								$("#notic").append( "<li class='media notification-teal'><a href='index.php/csie_lab_device_fix/index/return/"+data[i].fix_id+"' ><div class='media-left'><span class='notification-icon'><i class='fa  fa-exclamation-triangle'></i></span></div><div class='media-body'><h4 class='notification-heading'>"+data[i].lab_name+"教室<br />設備名稱："+data[i].device_name+"<br />設備編號："+data[i].device_number+"<br />位置："+data[i].device_position+"</h4><span class='notification-time'>申請時間："+data[i].fix_date+"</span></div></a></li>");
		
							}
				  }
					
					if(count==0)
					{
						count='';
					}
					$("#notic_count").html(count);

			},
			 error:function(xhr, ajaxOptions, thrownError){ 
				//alert(xhr.status); 
				//alert(thrownError); 
			 }
	});
};

			