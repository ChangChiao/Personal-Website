<div class="header">
		    <ul class="meun">
		         
		    	<li><a>探索品牌</a>
                   
            <ul>
            <li><a href="history.php">品牌故事</a></li>
  					<li><a href="story.php">名人故事</a></li>
  					<li><a href="world.php">工藝世界</a></li>
  					<li><a href="test.php">極限測試</a></li>
            </ul>

		    	</li>
		    	<li><a href="train.php">鐵道系列</a></li>
		    	<li><a href="Engineer.php">工程師系列</a></li>
          
          <li></li>

                  
          <div class="logo">
              <a href="index.php"></a>
		         	<img src="images/header-logo.png" alt="">
		      </div>

		    	<li><a href="diving.php">潛水系列</a></li>
		    	<li><a href="gmt.php">GMT系列</a></li>
		    	<li><a>客戶服務</a>
                     <ul>
                     	<li><a href="store.php">經銷商據點</a></li>
                     	<li><a href="fix2.php">維修中心</a></li>
                     	<li><a href="question.php">常見問題</a></li>
                     	<li><a href="use.php">使用說明</a></li>
                     	<li><a href="contact.php">檢修流程</a></li>
                     </ul>
		    	</li>
		    	</ul>
		   </div>
           
           <div class="header2">
               <input type="checkbox" name="" id=control>
               <div class="logo-min" onclick="location.href='index.php'">
                  
               </div>
               <div class="hb">
                   <div class="hb-in"></div>
                   <div id="hb-x"></div>
                   <div id="hb-x2"></div>
                   <label for="control"></label>
               </div>
               
               <div class="meun2">
                   <ul>
                       
                       <li class="one"><a href="train.php">鐵道系列</a></li>
                       <li class="one"><a href="engineer.php">工程師系列</a></li>
                       <li class="one"><a href="diving.php">潛水系列</a></li>
                       <li class="one"><a href="gmt.php">GMT系列</a></li>
                       <li class="one"><a href="#">探索品牌</a></li>
                       <li class="normal"><a href="history.php">品牌故事</a></li>
                       <li class="normal"><a href="story.php">名人故事</a></li>
                       <li class="normal"><a href="world.php">工藝世界</a></li>
                       <li class="normal"><a href="test.php">極限測試</a></li>
                       <li class="one" id="cus"><a href="#">客戶服務</a></li>
                       <li class="normal"><a href="store.php">經銷商據點</a></li>
                       <li class="normal"><a href="fix2.php">維修中心</a></li>
                       <li class="normal"><a href="question.php">常見問題</a></li>
                       <li class="normal"><a href="use.php">使用說明</a></li>
                       <li class="normal"><a href="contact.php">檢修流程</a></li>
                   </ul>
               </div>

           </div>
           <script src="js/jquery-3.1.0.min.js"></script>
           <script type="text/javascript">
               $(document).ready(function(){
                  $('.hb').click(function(){
                     $('.hb-in').toggle(10);
                     $('#hb-x').toggle(10).css('transform','rotate(45deg)');
                     $('#hb-x2').toggle(10).css('transform','rotate(45deg)');
                  });

             
               });


           </script>


