<?php
	$menu_main = 'welcome';
	$menu_sub = '';
	include_once('php-inc/header.php');
?>

    <!--main content start-->
    <section class="container typo">
        <div class="content">
            <nav class="l">
                <ul>
                    <li class="firstNav active"><a href="./index.php">Index</a></li>
                    <details open>
                         <summary>Questions</summary>
                         <li class="secondeNav"><a href="./practice/topic1.php?name=1">Get CSRF</a></li>
                         <li class="secondeNav"><a href="./practice/topic2.php?name=2">Post CSRF</a></li>
                         <li class="secondeNav"><a href="./practice3/index.php">CORS CSRF</a></li>
                         <li class="secondeNav"><a href="./practice/topic4.php?name=4">修改cookie导致CSRF</a></li>
<!--                          <li class="secondeNav"><a href="./practice/topic5.php">XSS输出在textarea中</a></li>
                         <li class="secondeNav"><a href="./practice/topic6.php?name=6">XSS通过innerHTML输出</a></li>
                         <li class="secondeNav"><a href="./practice/topic7.php">XSS通过eval执行的情况</a></li>
                         <li class="secondeNav"><a href="./practice/16.2.default_menu_horizontal.swf?xml_path=custom_menu.xml">XSS Jplayer</a></li>
                         <li class="secondeNav"><a href="./practice/15.swfupload.swf?movieName=9">XSS Swfupload</a></li> -->
                    </details>
                    <li class="firstNav"><a href="./gallery.html">Gallery</a></li>
                    <li class="firstNav"><a href="./about.php">About</a></li>
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l">
                <h1 class="text-left mt0">CSRF practice</h1>
                <h3 class="text-left">如何使用CSRF练习</h3>
                <ol class="box-welcome-text" >
                    <li> Question 包括了常见的几种类型的CSRF</li>
                     <li>题目基本上都需要配合XSS注入，如果你不了解什么是XSS，可以先去进行XSS练习</li> 
                    <li> About 包括了站点基本信息</li>
                    <li> 本站由twosecurity强力驱动</li>
                </ol>
            </div>
        </div>
         
    </section>

      <!--main content end-->  
      
      
<?php
	include_once('php-inc/footer.php');
?>	  