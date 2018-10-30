     // 省資源的右側浮動視窗 div
     // 特色：用較低的頻率檢測是否位移，若有位移才切換為高頻率移動模式
     // 　　　移動到定點之後，繼續變回靜止模式，省資源不LAG
     // By.Weberkk 2013 05 22  http://twnpc.com/
     
     // 右側浮動廣告寬度
     var FAD_Width = 100;
     var FAD_Style = document.getElementById('FAD_Div').style; 
 
     // 主要區塊大小 (廣告會置於主要區塊之右)
     var FAD_mainBlockWidth = $(window).width();
     var FAD_PaddingRight = $(window).width()-100;

     var FAD_PWidth = document.body.clientWidth;
     var FAD_Edge = (FAD_PWidth - FAD_mainBlockWidth) / 2;
     var FAD_LastPWidth = FAD_PWidth;

     // 廣告目標位置
     
     var FAD_X = FAD_Edge + FAD_PaddingRight;
     var FAD_Y = 152;
     
     var FAD_SetY = false;
     var FAD_ScrollY = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
     var FAD_LastScrollY = FAD_ScrollY;
     var FAD_TargetY = FAD_Y + FAD_ScrollY;
     
     // 廣告位置
     // var FAD_NowX = FAD_X;
     var FAD_NowY = FAD_TargetY;

     // 更新指定圖層之位置
         FAD_Style.left = FAD_X + 'px';
         FAD_Style.top = FAD_NowY + 'px';

     var FAD_N = 0;
     var FAD_Temp = 0;
     
     function FAD_ChackX() 
     {
         FAD_PWidth = document.body.clientWidth;
         if (FAD_PWidth < FAD_mainBlockWidth)
         {
         FAD_PWidth = FAD_mainBlockWidth
         }
         if (FAD_LastPWidth != FAD_PWidth)
         {
         FAD_LastPWidth = FAD_PWidth;
         FAD_Edge = (FAD_PWidth - FAD_mainBlockWidth) / 2;
         FAD_X = FAD_Edge + FAD_PaddingRight;
         FAD_Style.left = FAD_X + 'px';
         }
     }
     function FAD_ChackY() 
     {
         // 預防定義不同之設定
         FAD_ScrollY = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
         if (FAD_LastScrollY != FAD_ScrollY)
         {
         FAD_LastScrollY = FAD_ScrollY;
         FAD_TargetY = FAD_Y + FAD_ScrollY;
         FAD_SetY = true;
         }
     }

     function FAD_Fix() 
     {
        if ( FAD_Temp <= 3 ) {
        } else if ( FAD_Temp > 1250 ) {
        FAD_Temp = FAD_Temp - 1250        
        } else {
        FAD_Temp = FAD_Temp / 5
        }
     }

     // FloatAdRightRefresh: 更新視窗位置
     function FAD_Core() 
     {
      if (FAD_SetY) {
        //定期 chack Y
        if (FAD_N < 5) {
        FAD_N++
        } else {
        FAD_N=0
        FAD_ChackY();
        }
        //移動div Y
        FAD_Temp = (FAD_TargetY - FAD_NowY);
        if (FAD_Temp != 0) {
          if (FAD_Temp > 0) {
          FAD_Fix();
          } else {
          FAD_Temp = (0 - FAD_Temp);
          FAD_Fix();
          FAD_Temp = (0 - FAD_Temp);
          }
          FAD_NowY += FAD_Temp;
          FAD_Style.top = FAD_NowY + 'px';
          setTimeout('FAD_Core()', 15);
        } else {
          FAD_SetY = false;
          FAD_N=0
          setTimeout('FAD_Core()', 300);
        }
      } else {
        FAD_ChackX();
        FAD_ChackY();
        setTimeout('FAD_Core()', 300);
      }  
     }
 
     // ====== 啟動 =======
     FAD_Core();