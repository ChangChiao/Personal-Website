<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SANTAX-名人故事</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="images/sm-logo.ico"/>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="title.css">
	<link rel="stylesheet" type="text/css" href="grid.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">	
	<link rel="stylesheet" type="text/css" href="story.css">
	<script src="js/jquery-3.1.0.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

  <style type="text/css">
     .people{text-align:left;font-size: 0;
      box-sizing: border-box; 
      padding-bottom:100px;  }
     .pp{
      display:inline-block;
      vertical-align: top;
      z-index: 0 ;
      transition:.5s;
      background-position:center center;
      background-size:cover;
      position: relative;
      background-repeat: no-repeat;   
      }
      .pp1{
        width: 25%;height:0px; padding-bottom: 500px; 
      }

     #s1,#s2,#s3,#s4{
      background-color:rgba(0,0,0,.5); 
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left:0;
      display: none; 
     } 
     #p1,#p2-1,#p3-1{background-image:url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg);
      background-position: 50% 50%;
     }
     #p2,#p2-2,#p3-2{background-image:url(images/ertas_datejust_ii_0001_1680x520.jpg); 
      background-position: 60% 50%;
     }
     #p3,#p2-3,#p3-3{background-image:url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg);
     background-position:80% 50%; 
      }
     #p4,#p2-4,#p3-4{background-image:url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg);
     /*float:right; */
     background-position:50% 50%;
     
     }

     .name{
       position:absolute;
       z-index: 5;
       top: 50px;
       left:10px; 
       font-family: "微軟正黑體";
       color: #fff;
       font-size: 1.5rem;
       text-shadow:0px 2px 0px #666;    
     }
     .name:after{
        content:"點按查看更多";
        display:inline-block;
        position: relative;
        font-family:"微軟正黑體"; 
        z-index: 3;
        color:#fff;
        text-decoration:none;
        font-size: 0.8rem;  
        border:2px solid #fff;
        padding:3px 10px;  
        text-align: center;
        text-decoration: none;
        letter-spacing:3px; 
        
     }


    .content{
        font-size: 1rem;
        line-height:1.2rem; 
        color:#fff;
        position: absolute;
        top:5%;
        text-align:left;
        width: 50%;
        height: 100%; 
        box-sizing: border-box;
        padding:3%;
        outline:1px solid red; 
        
 
     }

      #c1,#c2,#c3,#c4,#c2-1,#c2-2,#c2-3,#c2-4,#c3-1,#c3-2,#c3-3,#c3-4
      {opacity:0;}


      #c2,#c2-2,#c3-2{
       left:50%;  
     }
/*=========================================================================*/
     .pp2{
       width: 50%; height:0px; padding-bottom: 500px;
     }
      .pp3{
       width: 100%; height:0px; padding-bottom: 500px;
     }
/*============================================================*/

/*================================================*/
     
  </style>
  
  <script>
     $(document).ready(function(){


         $('#p1').click(function(){
          $('#p1').css('width','55%').css('z-index','2')
          .css('background-image','url(images/story-p1.jpg)');
          $('#p2').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p3').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p4').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s1').css('display','none');
          $('#s2').css('display','block');
          $('#s3').css('display','block');
          $('#s4').css('display','block');
          $('#n1').css('display','none');
          $('#n2').css('display','block');
          $('#n3').css('display','block');
          $('#n4').css('display','block');
          $('#c1').css('opacity','1').css('transition-delay','.5s');
          $('#c2').css('opacity','0').css('transition-delay','0s');
          $('#c3').css('opacity','0').css('transition-delay','0s');
          $('#c4').css('opacity','0').css('transition-delay','0s');


         });

         $('#p2').click(function(){
          $('#p2').css('width','55%').css('z-index','2')
          .css('background-image','url(images/story-p2.jpg)');
          $('#p1').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#p3').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p4').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s2').css('display','none');
          $('#s1').css('display','block');
          $('#s3').css('display','block');
          $('#s4').css('display','block');
          $('#n1').css('display','block');
          $('#n2').css('display','none');
          $('#n3').css('display','block');
          $('#n4').css('display','block');
          $('#c1').css('opacity','0').css('transition-delay','0s');          
          $('#c2').css('opacity','1').css('transition-delay','.5s'); 
          $('#c3').css('opacity','0').css('transition-delay','0s');
          $('#c4').css('opacity','0').css('transition-delay','0s');        
        });

         $('#p3').click(function(){
          $('#p3').css('width','55%').css('z-index','2')
          .css('background-image','url(images/story-p3.jpg)');
          $('#p2').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p1').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#p4').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s3').css('display','none');
          $('#s2').css('display','block');
          $('#s1').css('display','block');
          $('#s4').css('display','block');
          $('#n1').css('display','block');
          $('#n2').css('display','block');
          $('#n3').css('display','none');
          $('#n4').css('display','block');
          $('#c1').css('opacity','0').css('transition-delay','0s');
          $('#c2').css('opacity','0').css('transition-delay','0s');          
          $('#c3').css('opacity','1').css('transition-delay','.5s');          
          $('#c4').css('opacity','0').css('transition-delay','0s');         
        });

         $('#p4').click(function(){
          $('#p4').css('width','55%').css('z-index','2')
          .css('background-image','url(images/ertas_vijay_amritraj_quotation_0001_1680x1050.jpg)');
          $('#p2').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p3').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p1').css('width','15%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#s4').css('display','none');
          $('#s2').css('display','block');
          $('#s3').css('display','block');
          $('#s1').css('display','block');
          $('#n1').css('display','block');
          $('#n2').css('display','block');
          $('#n3').css('display','block');
          $('#n4').css('display','none');
          $('#c1').css('opacity','0').css('transition-delay','0s');          
          $('#c2').css('opacity','0').css('transition-delay','0s');          
          $('#c3').css('opacity','0').css('transition-delay','0s');          
          $('#c4').css('opacity','1').css('transition-delay','.5s');         
        });

         // ============================================================
         



         $('#p2-1').click(function(){
          $('#p2-1').css('width','80%').css('z-index','2')
          .css('background-image','url(images/story-p1.jpg)');
          $('#p2-2').css('width','20%').css('z-index','1')
          .css('background-image','url(images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p2-3').css('width','50%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p2-4').css('width','50%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s2-1').css('display','none');
          $('#s2-2').css('display','block');
          $('#s2-3').css('display','block');
          $('#s2-4').css('display','block');
          $('#n2-1').css('display','none');
          $('#n2-2').css('display','block');
          $('#n2-3').css('display','block');
          $('#n2-4').css('display','block');
          $('#c2-1').css('opacity','1');
          $('#c2-2').css('opacity','0');
          $('#c2-3').css('opacity','0');
          $('#c2-4').css('opacity','0');

         });

         $('#p2-2').click(function(){
          $('#p2-2').css('width','80%').css('z-index','2')
          .css('background-image','url(images/story-p2.jpg)');
          $('#p2-1').css('width','20%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#p2-3').css('width','50%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p2-4').css('width','50%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s2-2').css('display','none');
          $('#s2-1').css('display','block');
          $('#s2-3').css('display','block');
          $('#s2-4').css('display','block');
          $('#n2-1').css('display','block');
          $('#n2-2').css('display','none');
          $('#n2-3').css('display','block');
          $('#n2-4').css('display','block');
          $('#c2-1').css('opacity','0');
          $('#c2-2').css('opacity','1');
          $('#c2-3').css('opacity','0');
          $('#c2-4').css('opacity','0');
         });

         $('#p2-3').click(function(){
          $('#p2-3').css('width','80%').css('z-index','2')
          .css('background-image','url(images/story-p3.jpg)');
          $('#p2-2').css('width','50%').css('z-index','1')
          .css('background-image','url(images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p2-1').css('width','50%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#p2-4').css('width','20%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s2-3').css('display','none');
          $('#s2-2').css('display','block');
          $('#s2-1').css('display','block');
          $('#s2-4').css('display','block');
          $('#n2-1').css('display','block');
          $('#n2-2').css('display','block');
          $('#n2-3').css('display','none');
          $('#n2-4').css('display','block');
          $('#c2-1').css('opacity','0');
          $('#c2-2').css('opacity','0');
          $('#c2-3').css('opacity','1');
          $('#c2-4').css('opacity','0');
         });

         $('#p2-4').click(function(){
          $('#p2-4').css('width','80%').css('z-index','2')
          .css('background-image','url(images/ertas_vijay_amritraj_quotation_0001_1680x1050.jpg)');
          $('#p2-2').css('width','50%').css('z-index','1')
          .css('background-image','images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p2-3').css('width','20%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p2-1').css('width','50%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#s2-4').css('display','none');
          $('#s2-2').css('display','block');
          $('#s2-3').css('display','block');
          $('#s2-1').css('display','block');
          $('#n2-1').css('display','block');
          $('#n2-2').css('display','block');
          $('#n2-3').css('display','block');
          $('#n2-4').css('display','none');
          $('#c2-1').css('opacity','0');
          $('#c2-2').css('opacity','0');
          $('#c2-3').css('opacity','0');
          $('#c2-4').css('opacity','1');
         });

         // ==========================================================
         $('#p3-1').click(function(){
          $('#p3-1').css('width','100%').css('z-index','2')
          .css('background-image','url(images/story-p1.jpg)');
          $('#p3-2').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p3-3').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p3-4').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s3-1').css('display','none');
          $('#s3-2').css('display','block');
          $('#s3-3').css('display','block');
          $('#s3-4').css('display','block');
          $('#n3-1').css('display','none');
          $('#n3-2').css('display','block');
          $('#n3-3').css('display','block');
          $('#n3-4').css('display','block');
          $('#c3-1').css('opacity','1');
          $('#c3-2').css('opacity','0');
          $('#c3-3').css('opacity','0');
          $('#c3-4').css('opacity','0');

         });

         $('#p3-2').click(function(){
          $('#p3-2').css('width','100%').css('z-index','2')
          .css('background-image','url(images/story-p2.jpg)');
          $('#p3-1').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#p3-3').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p3-4').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s3-2').css('display','none');
          $('#s3-1').css('display','block');
          $('#s3-3').css('display','block');
          $('#s3-4').css('display','block');
          $('#n3-1').css('display','block');
          $('#n3-2').css('display','none');
          $('#n3-3').css('display','block');
          $('#n3-4').css('display','block');
          $('#c3-1').css('opacity','0');
          $('#c3-2').css('opacity','1');
          $('#c3-3').css('opacity','0');
          $('#c3-4').css('opacity','0');
         });

         $('#p3-3').click(function(){
          $('#p3-3').css('width','100%').css('z-index','2')
          .css('background-image','url(images/story-p3.jpg)');
          $('#p3-2').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p3-1').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#p3-4').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_vijay_amritraj_day-date_0001_1680x520.jpg)');
          $('#s3-3').css('display','none');
          $('#s3-2').css('display','block');
          $('#s3-1').css('display','block');
          $('#s3-4').css('display','block');
          $('#n3-1').css('display','block');
          $('#n3-2').css('display','block');
          $('#n3-3').css('display','none');
          $('#n3-4').css('display','block');
          $('#c3-1').css('opacity','0');
          $('#c3-2').css('opacity','0');
          $('#c3-3').css('opacity','1');
          $('#c3-4').css('opacity','0');
         });

         $('#p3-4').click(function(){
          $('#p3-4').css('width','100%').css('z-index','2')
          .css('background-image','url(images/ertas_vijay_amritraj_quotation_0001_1680x1050.jpg)');
          $('#p3-2').css('width','100%').css('z-index','1')
          .css('background-image','images/ertas_datejust_ii_0001_1680x520.jpg)');
          $('#p3-3').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_michael_buble_cosmograph_daytona_0001_1680x520.jpg)');
          $('#p3-1').css('width','100%').css('z-index','1')
          .css('background-image','url(images/ertas_lindsey_vonn_day-date_0001_1680x520.jpg)');
          $('#s3-4').css('display','none');
          $('#s3-2').css('display','block');
          $('#s3-3').css('display','block');
          $('#s3-1').css('display','block');
          $('#n3-1').css('display','block');
          $('#n3-2').css('display','block');
          $('#n3-3').css('display','block');
          $('#n3-4').css('display','none');
          $('#c3-1').css('opacity','0');
          $('#c3-2').css('opacity','0');
          $('#c3-3').css('opacity','0');
          $('#c3-4').css('opacity','1');
         });

     });
  </script>
  
	
</head>
<body>
	<div class="wrapper">
	 <div class="slider" >
       <?php  include 'header.php';  ?>
       
       <div class="txtbox col-xs-7 col-sm-7 col-md-5">
		   	    <h4>一只SANTAX，一個故事</h4>
		   	    <p>SANTAX腕錶常備受珍視，它不僅具備物質價值，更蘊藏深遠的意義。不論是作為家傳之寶、成功路上的里程碑或贈禮，SANTAX腕錶常象徵著生命旅途上的非凡時刻。</p>
		    </div>
		   </div>
		   <div class="title">探索故事</div>
		   <!-- <div class="people">
		  
		   	  <div class="pp p1">
		   	     <div class="p1-img">
		   	     	<img src="images/ertas_lindsey_vonn_quotation_0001_1680x1050.jpg" alt="">
		   	     </div>
		   	  </div>
		   	  
		   	   <div class="clearfix"></div>
		   	  
		   	  <div class="pp p2">
		   	  	<div class="p2-img">
		   	  		<img src="images/ertas_sir_jackie_stewart_quotation_0002_1680x1050.jpg" alt="">
		   	  	</div>		   	  
		   	  </div>
		   	  <div class="clearfix"></div>
		   	  
		   	  <div class="pp p3">
		   	  	<div class="p3-img">

		   	  		<img src="images/ertas_michael_buble_quotation_0001_1680x1050.jpg" alt="">
		   	  	</div> 
		   	  </div>
		   	  <div class="clearfix"></div>
		   	
		   </div>
       -->
        <div class="people1 people">
           <div class="pp pp1" id="p1">
              <div class="name" id="n1">
                 <p>蓮茜 ∙ 禾恩</p>
              </div>
              <div class="content" id="c1">
                 <p>蓮茜 ∙ 禾恩（Lindsey Vonn）是美國高山滑雪世界盃運動員，並堪稱全球最成功的滑雪運動員之一。2013年，她膝蓋的傷患嚴重影響她的滑雪能力，更令她錯失整個滑雪賽季與索契冬季奧林匹克運動會。儘管這有礙她職業生涯的發展，但她憑着果敢與堅毅精神成功克服逆境，此次經驗令她變得更堅強。於康復期間，蓮茜獲贈予勞力士腕錶，並以此提醒自己 永不放棄。</p>
              </div>  
              <div class="ps" id="s1"></div>
           </div>
           <div class="pp pp1" id="p2">
              <div class="name" id="n2">
                 <p>積奇 ∙ 史釗活</p>
              </div> 
              <div class="content" id="c2">
                 <p>積奇 ∙ 史釗活爵士（Sir Jackie Stewart）於1966年至1973年間，三度於FORMULA 1 GRAND PRIX DE MONACO大賽勝出。有着「飛行蘇格蘭人」綽號的史釗活爵士在賽道上堪為一級方程式賽車史上最傑出的車手之一，然而他在賽事外則以宣揚賽車運動安全駕駛而見稱。他擔任勞力士代言人已近50年，而其職業生涯巔峰的摩納哥賽事，對他而言是最絢麗迷人、最精彩刺激的格蘭披治大賽。今天他看着腕錶，讓他回想起那些輝煌成就，以及如何憑過人的技術與速度取勝。</p>
              </div>  
              <div class="ps" id="s2"></div>
           </div>
           <div class="pp pp1" id="p3">
              <div class="name" id="n3">
                 <p>米高 ∙ 布雷</p>
              </div>
              <div class="content" id="c3">
                 <p>米高 ∙ 布雷（Michael Bublé）自幼便憧憬成為知名歌手。在全球發行五千萬張唱片、贏得四項格林美殊榮、連續四張專輯於美國Billboard 200唱片排行榜位居首位，在達成這些矚目成就之前，布雷曾經過十年的努力，才能令夢想成真。無數個演出的晚上，除家人及朋友外，只有少量的聽眾支持，幸而他最終能取得突破。唱片公司於他首張音樂專輯報捷時，贈予他一枚勞力士腕錶，自此他一直視此腕錶為他努力不懈、不斷追尋夢想的象徵。</p>
              </div>  
              <div class="ps" id="s3"></div>

           </div>
           <div class="pp pp1" id="p4">
              <div class="name" id="n4">
                 <p>維積 ∙ 阿姆列查</p>
              </div>
              <div class="content" id="c4">
                 <p>維積 ∙ 阿姆列查（Vijay Amritraj）成功克服生命中的挑戰。生於印度的阿姆列查自小患有嚴重肺病，令他童年大部分時間均在醫院中渡過。當醫生建議他參與戶外運動以強健體魄時，他選擇了網球運動。此運動不僅讓他恢復健康，更成就他成為印度首位職業運動員。1976年，年僅23歲的他於紐波特名人堂錦標賽（Newport Hall of Fame Tournament）勝出，並獲頒授一枚勞力士腕錶。此腕錶也見證了他在人生面對挑戰與於逆境時堅持不懈的精神。他時刻佩戴腕錶，四十年來它依然是其最喜愛的珍藏。</p>
              </div>  
              <div class="ps" id="s4"></div>
           </div>
          
        </div>
<!-- ==================================================== -->
         <div class="people2 people">
           <div class="pp pp2 " id="p2-1">
              <div class="name" id="n2-1">
                 <p>蓮茜 ∙ 禾恩</p>
              </div>
              <div class="content" id="c2-1">
                 <p>蓮茜 ∙ 禾恩（Lindsey Vonn）是美國高山滑雪世界盃運動員，並堪稱全球最成功的滑雪運動員之一。2013年，她膝蓋的傷患嚴重影響她的滑雪能力，更令她錯失整個滑雪賽季與索契冬季奧林匹克運動會。儘管這有礙她職業生涯的發展，但她憑着果敢與堅毅精神成功克服逆境，此次經驗令她變得更堅強。於康復期間，蓮茜獲贈予勞力士腕錶，並以此提醒自己 永不放棄。</p>
              </div>    
              <div class="ps" id="s2-1"></div>
           </div>
           <div class="pp pp2 " id="p2-2">
              <div class="name" id="n2-2">
                 <p>積奇 ∙ 史釗活</p>
              </div>
              <div class="content" id="c2-2">
                 <p>積奇 ∙ 史釗活爵士（Sir Jackie Stewart）於1966年至1973年間，三度於FORMULA 1 GRAND PRIX DE MONACO大賽勝出。有着「飛行蘇格蘭人」綽號的史釗活爵士在賽道上堪為一級方程式賽車史上最傑出的車手之一，然而他在賽事外則以宣揚賽車運動安全駕駛而見稱。他擔任勞力士代言人已近50年，而其職業生涯巔峰的摩納哥賽事，對他而言是最絢麗迷人、最精彩刺激的格蘭披治大賽。今天他看着腕錶，讓他回想起那些輝煌成就，以及如何憑過人的技術與速度取勝。</p>
              </div>     
              <div class="ps" id="s2-2"></div>
           </div>
           <div class="pp pp2 " id="p2-3">
              <div class="name" id="n2-3">
                 <p>米高 ∙ 布雷</p>
              </div>  
               <div class="content" id="c2-3">
                 <p>米高 ∙ 布雷（Michael Bublé）自幼便憧憬成為知名歌手。在全球發行五千萬張唱片、贏得四項格林美殊榮、連續四張專輯於美國Billboard 200唱片排行榜位居首位，在達成這些矚目成就之前，布雷曾經過十年的努力，才能令夢想成真。無數個演出的晚上，除家人及朋友外，只有少量的聽眾支持，幸而他最終能取得突破。唱片公司於他首張音樂專輯報捷時，贈予他一枚勞力士腕錶，自此他一直視此腕錶為他努力不懈、不斷追尋夢想的象徵。</p>
              </div>     
              <div class="ps" id="s2-3"></div>

           </div>
           <div class="pp pp2 " id="p2-4">
              <div class="name" id="n2-4">
                 <p>維積 ∙ 阿姆列查</p>
              </div>
              <div class="content" id="c2-4">
                 <p>維積 ∙ 阿姆列查（Vijay Amritraj）成功克服生命中的挑戰。生於印度的阿姆列查自小患有嚴重肺病，令他童年大部分時間均在醫院中渡過。當醫生建議他參與戶外運動以強健體魄時，他選擇了網球運動。此運動不僅讓他恢復健康，更成就他成為印度首位職業運動員。1976年，年僅23歲的他於紐波特名人堂錦標賽（Newport Hall of Fame Tournament）勝出，並獲頒授一枚勞力士腕錶。此腕錶也見證了他在人生面對挑戰與於逆境時堅持不懈的精神。他時刻佩戴腕錶，四十年來它依然是其最喜愛的珍藏。</p>
              </div>    
              <div class="ps" id="s2-4"></div>
           </div>
          
        </div>

 <!-- ==============================================================        -->

     <div class="people3 people">
           <div class="pp pp3 " id="p3-1">
              <div class="name" id="n3-1">
                 <p>蓮茜 ∙ 禾恩</p>
              </div> 
              <div class="content" id="c3-1">
                 <p>蓮茜 ∙ 禾恩（Lindsey Vonn）是美國高山滑雪世界盃運動員，並堪稱全球最成功的滑雪運動員之一。2013年，她膝蓋的傷患嚴重影響她的滑雪能力，更令她錯失整個滑雪賽季與索契冬季奧林匹克運動會。儘管這有礙她職業生涯的發展，但她憑着果敢與堅毅精神成功克服逆境，此次經驗令她變得更堅強。於康復期間，蓮茜獲贈予勞力士腕錶，並以此提醒自己 永不放棄。</p>
              </div>     
              <div class="ps" id="s3-1"></div>
           </div>
           <div class="pp pp3 " id="p3-2">
              <div class="name" id="n3-2">
                 <p>積奇 ∙ 史釗活</p>
              </div>   
                <div class="content" id="c3-2">
                 <p>積奇 ∙ 史釗活爵士（Sir Jackie Stewart）於1966年至1973年間，三度於FORMULA 1 GRAND PRIX DE MONACO大賽勝出。有着「飛行蘇格蘭人」綽號的史釗活爵士在賽道上堪為一級方程式賽車史上最傑出的車手之一，然而他在賽事外則以宣揚賽車運動安全駕駛而見稱。他擔任勞力士代言人已近50年，而其職業生涯巔峰的摩納哥賽事，對他而言是最絢麗迷人、最精彩刺激的格蘭披治大賽。今天他看着腕錶，讓他回想起那些輝煌成就，以及如何憑過人的技術與速度取勝。</p>
              </div>     
              <div class="ps" id="s3-2"></div>
           </div>
           <div class="pp pp3 " id="p3-3">
              <div class="name" id="n3-3">
                 <p>米高 ∙ 布雷</p>
              </div>  
              <div class="content" id="c3-3">
                 <p>米高 ∙ 布雷（Michael Bublé）自幼便憧憬成為知名歌手。在全球發行五千萬張唱片、贏得四項格林美殊榮、連續四張專輯於美國Billboard 200唱片排行榜位居首位，在達成這些矚目成就之前，布雷曾經過十年的努力，才能令夢想成真。無數個演出的晚上，除家人及朋友外，只有少量的聽眾支持，幸而他最終能取得突破。唱片公司於他首張音樂專輯報捷時，贈予他一枚勞力士腕錶，自此他一直視此腕錶為他努力不懈、不斷追尋夢想的象徵。</p>
              </div>     
              <div class="ps" id="s3-3"></div>

           </div>
           <div class="pp pp3 " id="p3-4">
              <div class="name" id="n3-4">
                 <p>維積 ∙ 阿姆列查</p>
              </div>  
              <div class="content" id="c3-4">
                 <p>維積 ∙ 阿姆列查（Vijay Amritraj）成功克服生命中的挑戰。生於印度的阿姆列查自小患有嚴重肺病，令他童年大部分時間均在醫院中渡過。當醫生建議他參與戶外運動以強健體魄時，他選擇了網球運動。此運動不僅讓他恢復健康，更成就他成為印度首位職業運動員。1976年，年僅23歲的他於紐波特名人堂錦標賽（Newport Hall of Fame Tournament）勝出，並獲頒授一枚勞力士腕錶。此腕錶也見證了他在人生面對挑戰與於逆境時堅持不懈的精神。他時刻佩戴腕錶，四十年來它依然是其最喜愛的珍藏。</p>
              </div>    
              <div class="ps" id="s3-4"></div>
           </div>
          
        </div>

      <?php  include 'footer.php';  ?>
     </div>

   
     

</body>
</html>