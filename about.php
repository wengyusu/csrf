<?php
	$menu_main = 'about';
	$menu_sub = '';
	include_once('php-inc/header.php');
?>
    <section class="container typo">
        <div class="content">
            <nav class="l">
                <ul>
                    <li class="firstNav "><a href="./index.php">Index</a></li>
                    <details open>
                         <summary>Questions</summary>
                         <li class="secondeNav"><a href="./practice/topic1.php?name=1">Get CSRF</a></li>
                         <li class="secondeNav"><a href="./practice/topic2.php?name=2">Post CSRF</a></li>
                         <li class="secondeNav"><a href="./practice3/index.php">CORS CSRF</a></li>
                         <li class="secondeNav"><a href="./practice/topic4.php?name=4">修改cookie导致CSRF</a></li>
                    </details>
                    <li class="firstNav active"><a href="./about.php">About</a></li>
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l">
                <div class="row pt0">
                    <div class="col-lg-12 main-chart pt0 ">

                            <div class="box1 about-box1 pt0 pl0 ">
                                    <h1 class="text-left pt0">TwoSecurity</h1>
                                    <p class="box-welcome-text text-left">Welcome to TwoSecurity</p>
                            </div>
                            <br>
                            <div class="mnc-center">
                                <div class="display-data text-left">
                                    <h1>Credits</h1>
                                    <p>Two security<br/> Website - <a href="http://twosecurity.xyz">http://twosecurity.xyz</a><br/>
                                    </p>
                                </div>
                            </div>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>



    <?php
	include_once('php-inc/footer.php');
?>