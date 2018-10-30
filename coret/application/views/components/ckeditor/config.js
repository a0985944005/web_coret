/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	config.font_names = 'Arial;Arial Black;Comic Sans MS;Courier New;Tahoma;Times New Roman;Verdana;新細明體;細明體;標楷體;微軟正黑體';
	config.allowedContent=true;

		config.skin = 'bootstrapck';
	// Define changes to default configuration here. For example:
	config.language = 'zh';//語系指定
	//config.skin = 'kama'; //換佈景效果，選項：v2,office2003  
	//config.uiColor = '#AADC6E'; //換背景色
	//config.width = 500; //編輯區塊寬度設定
    config.height = 500; //編輯區塊高度設定
    //允許檔案上傳相關設定
	config.filebrowserBrowseUrl = 'http://coret.com.tw/application/views/components/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = 'http://coret.com.tw/application/views/components/ckfinder/ckfinder.html?Type=Images';
    config.filebrowserFlashBrowseUrl = 'http://coret.com.tw/application/views/components/ckfinder/ckfinder.html?Type=Flash';
    config.filebrowserUploadUrl = 'http://coret.com.tw/application/views/components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = 'http://coret.com.tw/application/views/components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = 'http://coret.com.tw/application/views/components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
