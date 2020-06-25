<?php 
include_once('../w/wp-load.php');
$query = "?".$_SERVER['QUERY_STRING'];
$search = array('?f=index.php&','?f=index.php');
$query2 = str_replace($search, '', $query);
print '<?xml version="1.0" encoding="UTF-8"?>';
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>


  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-T329LCK');</script>
  <!-- End Google Tag Manager -->
  

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="stylesheet" href="style.min.css" type="text/css" />

  <title>ダイエットナビ</title>
  <style>
    .searchbox {
      text-align: left!important;
    }
  </style>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T329LCK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->

  <div id="wrapper">
   
      <header>  
        <div class="img-wrap">
          <img src="./img/n_img/top-banner-sp.png"/>
        </div>
      </header>

        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
        <div style="padding:10px 0 0;">
          <?php get_search_form(); ?>
        </div>
        <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
        <?php }else{ ?>
        <?php } ?>


        <section id="section-01">

            <div class="title-wrap center">

                <h1 class="left"><span class="red">「絶対に痩せたい！」<br>「お腹の脂肪を減らしたい！」</span></h1>
                
                <h1 class="right">とお悩みの方へ</span></h1><br>
                
                <h1>本当におすすめ！<br>厳選ダイエットサプリランキング<br>ベスト５を大公開！</span></h1>

            </div><!--.title-wrap end-->

            <div class="txt-wrap">

                <p>当サイトでは数多くのダイエットサプリの成分や利用者の口コミを徹底調査！</p><br>

                <p><span class="bold bg-y">【失敗しないダイエットサプリの正しい選び方】</span>と<span class="bold bg-y">【厳選！おすすめのダイエットサプリ】</span>をご紹介します。
                </p><br>

                <p>「本気で痩せたい」とお考えの方は是非参考にしてみてください。</p><br>

                <p>早速、一部を比較表でご紹介します。</p>
            　　　　　　　　　　　　
            </div><!--.txt-wrap end-->
                  
        </section><!--#section-01 end-->






        <section id="section-02">
                
                <!--比較表START-->
          
                    <table class="table-01" cellspacing="1">
          
                      <tbody>

                        <tr>

                          <th class="crown">

                          </th>

                          <th class="crown">
                              <p>
                                <img src="./img/n_img/crown_icon_01.png" width="80" alt="" />
                              </p>

                          </th>

                          <th class="crown">
                              <p>
                                <img src="./img/n_img/crown_icon_02.png" width="80" alt="" />
                              </p>
                          </th>

                          <th class="crown">
                              <p>
                                <img src="./img/n_img/crown_icon_03.png" width="80" alt="" />
                              </p>
                          </th>


                        </tr>

          
                        <!-- 1行目 商品名-->
          
                        <tr>
                          <th class="table-title width">
                            <h6>商品名</h6>
                            </p>
                          </th>
          
                          <th>
          
                            <p>
                              <a class="link-img" target="_blank" href="https://bi-navi.com/links/laku.php<?php echo "?".$query2; ?>">
                                <img src="./img/lakubi.jpg" alt="" />
                              </a>
                            </p>
                            
                            <p>
                              <span class="lbg">
                              <a target="_blank" href="https://bi-navi.com/links/laku.php<?php echo "?".$query2; ?>">ラクビ</a>
                              </span>
                            </p>
                        
                          </th>
          
          
          
                          <th>
                            <p>
                              <a class="link-img" target="_blank" href="https://bi-navi.com/links/hoko.php<?php echo "?".$query2; ?>">
                                <img src="./img/hoko.jpg" alt="" />
                              </a>
                            </p>
                            <p>
                              <span class="lbg">
                                <a target="_blank" href="https://bi-navi.com/links/hoko.php<?php echo "?".$query2; ?>">ホコニコ</a>
                              </span>
                            </p>
                          </th>
          
          
          
          
                          <th>
                            
                            <p>
                              <a class="link-img" target="_blank" href="https://bi-navi.com/links/bise.php<?php echo "?".$query2; ?>">
                                <img src="./img/bise.jpg" alt="">
                              </a>
                            </p>
                            <p>
                                <span class="lbg">
                                  <a target="_blank" href="https://bi-navi.com/links/bise.php<?php echo "?".$query2; ?>">ビセラ</a>
                                </span>
                            </p>
                          </th>
          
                        </tr>
          
          
                        <!-- 2行目 -->
          
                        <tr>
                          <td class="table-title width">
                            <h6>「実感した！」<br>ユーザー評価</h6>
                            
                          </td>
          
                          <td>
                              <p>
                                <img src="./img/review_5.gif" alt="" />
                              </p>

                              <p class="f-13">4.8/5.0</p>

                          </td>
          
          
                          <td>
                              <p>
                                <img src="./img/review_45.gif" alt="" />
                              </p>

                              <p class="f-13">4.4/5.0</p>

                          </td>
          
                          <td>
                              <p>
                                <img src="./img/review_4.gif" alt="" />
                              </p>
                              
                              <p class="f-13">4.0/5.0</p>

                          </td>
          
                        </tr>
          
          
          
          
                        <!-- 3行目 -->
          
                        <!--<tr>
                          <td class="table-title width">
                              <h6>サプリタイプ</h6>
                          </td>
          
                          <td>
                              <p>燃焼・カット系</p>                    
                          </td>
          
                          <td>
                             <p>乳酸菌・体内フローラ系</p>                    
                          </td>
          
                          <td>
                             <p>燃焼・カット系</p>                    
                          </td>
                        </tr>-->
          
          
          
                        <!-- 4行目 -->
          
                        <tr>
          
                          <td class="table-title width">
                              <h6>配合成分</h6>
                          </td>
          
                          <td>
                              <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                              <p></p>
                          </td>
                          <td>
                              <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                              <p>ラクトフェリン・ビフィズス菌・フェカリス菌・オリゴ糖</p>
                          </td>
                          <td>
                              <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                              <p>短鎖脂肪酸・ラクリス菌・EC-12・ナノ乳酸菌</p>

                          </td>
                        </tr>
          
          
                        <!-- 5行目 -->
          
                        <tr>
          
                          <td class="table-title width">
                              <h6>即効性</h6>
                          </td>
          
                          <td>
                              <img class="small" src="./img/n_img/r_check_01.png" alt="" />

                          </td>
          
                          <td>
                              <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                          </td>
          
                          <td>
                              <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                          </td>
          
                        </tr>

                        <!-- 6行目 -->
          
                        <tr>
          
                          <td class="table-title width">
                              <h6>こんな人に<br>おすすめ</h6>
                          </td>

                          <td>
                              <p></p>
                          </td>

                          <td>
                             <p>・・ラクトフェリンと乳酸菌を同時に摂りたい<br>・多少高くてもしっかりと体内フローラを整えたい<br>・シンプルな配合、お子様と一緒に健康になりたい</p>
                          </td>

                          <td>
                             <p>・手ごろな価格で体内フローラサプリを試したい<br>・短鎖脂肪酸をダイレクトに撮りたい</p>
                          </td>

                        </tr>


                        <!-- 7行目 -->

                        <tr>

                          <td class="table-title">
                              <h6>通常価格</h6>
                          </td>

                          <td>
                              <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                              <p></p>

                          </td>

                          <td>
                              <img class="small" src="./img/n_img/r_check_03.png" alt="" />
                              <p>7,800円<br>（1ヵ月分）</p>

                          </td>

                          <td>
                              <img class="small" src="./img/n_img/r_check_02.png" alt="" />
                              <p>5,687円<br>（1ヵ月分）</p>

                          </td>

                        </tr>


                        <!-- 8行目 -->

                        <tr>

                          <td class="table-title">
                              <h6>キャンペーン</h6>
                          </td>

                          <td>
                              <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                              <p>初回500円<br>（1ヵ月分）</p>

                          </td>

                          <td>
                              <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                              <p>初回780円<br>（1ヵ月分）</p>

                          </td>

                          <td>
                              <img class="small" src="./img/n_img/r_check_01.png" alt="" />
                              <p>初回500円<br>（1ヵ月分）</p>

                          </td>

                        </tr>

                        
                        <!-- 9行目 -->

                        <tr class="btn" style="height: 50px;">

                          <td class="table-title">
                              <h6>公式サイト</h6>
                          </td>

                          <td>
                              <a target="_blank" href="https://bi-navi.com/links/laku.php<?php echo "?".$query2; ?>">
                                <img src="./img/n_img/btn_site_go_s.png" width="100%">
                              </a>                      
                          </td>

                          <td>
                              <a target="_blank" href="https://bi-navi.com/links/hoko.php<?php echo "?".$query2; ?>">
                                <img src="./img/n_img/btn_site_go_s.png" width="100%">
                              </a>
                          </td>

                          <td>
                              <a target="_blank" href="https://bi-navi.com/links/bise.php<?php echo "?".$query2; ?>">
                                <img src="./img/n_img/btn_site_go_s.png" width="100%">
                              </a>
                          </td>
          
                        </tr>
          
                      </tbody>
          
                    </table>
          
                   <!--比較表END-->
          
      </section><!--#section-02 end-->



      <section id="section-03">

       
        <h1 class="midashi">ダイエットサプリ選びで<br>失敗しないための５つのポイント</h1>

        <div class="txt-wrap">

            <p>特に最近は詐欺まがいの悪徳サプリもたくさん流通しており<span class="bold">「高いお金を払ったのに、全く効果がなかった」</span>
            </p>

            <p><span class="bold">「それどころか、体調まで悪くした」</span>なんてことも。。</p><br>

            <p>そこで、正しい選び方のポイントをまとめました。</p>

        </div><!--.txt-wrap end-->


        
        <ol class="point-list">

             <li>
               実際に使ってる人の<span class="pink">口コミ満足度が高い</span>か
             </li>
             <li>
              <span class="pink">有用成分が充分な量</span>含まれているか
             </li>
             <li>
              <span class="pink">続けやすい料金</span>になっているか
             </li>
             <li>
              <span class="pink">悪徳メーカー</span>が出しているサプリではないか
             </li>
             <li>
              利用者のことを<span class="pink">真剣に考えて</span>つくられているか
             </li>


        </ol>


        <div class="txt-wrap">

          <p>当サイトでは、上記ポイントを元に「本当に飲んで満足できるサプリ」を徹底的に調査しました！</p>

          <p>ランキング形式で発表します！！</p>
          
                        
          <div class="img-wrap arrow">
              <img src="./img/n_img/new_arrow.png" />
          </div>


        </div><!--.txt-wrap end-->


      </section><!--#section-03 end-->



      <div class="img-wrap">
          <img src="./img/n_img/ranking-banner-sp.png"/>
      </div>

    <!----------------------------RANKING-------------------------->

        <section id="section-04">

              <ul class="tabs">
                <li rel="tab1">ダイエットサプリ<br>総合<br>ランキング</li>
                <li class="active red" rel="tab2">体内<br>フローラ<br>サプリ</li>
                <li rel="tab3">燃焼・カット<br>サプリ</li>
                <li rel="tab4">酵素<br>サプリ</li>
                <li rel="tab5">酵素<br>ドリンク</li>
              </ul>

              <?php include 'ranking.php';?>


        </section><!--#section-04 end-->

    <!----------------------------RANKING-------------------------->



        <section id="section-05">

                  
                    <img src="./img/n_img/last_banner.png" alt="" width="100%">
                  

                  <div class="last-container">


                    <div class="last-txt bg-wh border-r">

                     <p>当サイトでご紹介している体内フローラサプリは、効果はもちろんですが、 
                     <span class="bold">できるかぎり多くの「痩せたい」「毎朝すっきりしたい」とお悩みの方に試していただきたい</span>という気持ちから、
                     <span class="bold red">お得に試せるかどうか</span>、という点も重要視して選ばせていただきました。</p><br>

                     <p>体内フローラサプリランキング第１位の<span class="bold">LAKUBI（ラクビ）</span>は今なら 
                     <span class="bold blue">初回５００円モニター募集中！</span>なんと、 １日わずか１０円 で試すことが出来ちゃいます。</p><br>

                     <p>このめっちゃお得なキャンペーンは、 <span class="bold">今だけのキャンペーンなのですぐに募集が終了してしまう可能性が高い</span>です。</p><br>

                     <p>さらに、<span class="bold red">今だけAmazonギフト券（５００円分）応募券付き！</span> 試してみようとお考えの方は、 
                     <span class="bold red">お得なキャンペーンが終了する前に手に入れてくださいね！</span></p><br>


                            <div class="img-wrap-last">

                              <img src="./img/n_img/last_lakubi.png" width="350">

                            </div>
                          
                            <a target="_blank" href="https://bi-navi.com/links/laku.php<?php echo "?".$query2; ?>" target="_blank">
                              <img alt="" src="./img/n_img/btn_site_go_last_l.png" width="100%" />
                            </a>                             
                           

                        </div>
                  
                      </div>
                          
        </section>

      
              

      <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
      <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
      <?php }else{ ?>
      <div style="padding:10px 0 0;">
        <?php get_search_form(); ?>
      </div>
      <?php } ?>


     

      <div id="menu">

        <div class="menubox">
          <ul id="menu1">
            <li>
              <a href="./unei.php<?php echo "?".$query2; ?>">運営者情報</a>
            </li>
            <li>
              <a href="./entry4.php<?php echo "?".$query2; ?>">ランキング調査概要</a>
            </li>
          </ul>
        </div>

      </div>



      <footer>

         Copyright (C) 2018 <br>優良乳酸菌サプリメントをご紹介 All Rights Reserved.
            <script>
              (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                  (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                  m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
              })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

              ga('create', 'UA-98179377-1', 'auto');
              ga('send', 'pageview');

            </script>

            </footer>


            <script>
              $(function () {

              $(".tab_content").hide();
              $(".tab_content:nth-of-type(2)").show();

              $("ul.tabs li").click(function () {
                  $("ul.tabs li").removeClass("active").css("color", "#333");
                  //$(this).addClass("active").css({"color": "darkred","font-weight": "bold"});
                  $(this).addClass("active").css("color", "white");
                  $(".tab_content").hide()
                  var activeTab = $(this).attr("rel");
                  $("#" + activeTab).fadeIn()
              });
              });
          </script>


</body>

</html>