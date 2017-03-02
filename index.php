<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>地方自治比較サイトLakuda</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="css/style.css" rel="stylesheet">
    
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="./js/content-jq.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/Highcharts-5.0.6/code/highcharts.js"></script>
</head>
<body>
    <header class="l-header">
      <div class="l-container">
        <div class="logo">Lakuda</div>
        <nav class="l-nav">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-title js-dropdown" href="#">一般向けコンテンツ</a>
              <div class="panel js-dropdown-menu">
                <ul class="panel-inner">
                  <li class="panel-item"><a href="#">メイン</a></li>
                  <li class="panel-item"><a href="#">議員情報</a></li>
                  <li class="panel-item"><a href="#">自治体情報</a></li>
                  <li class="panel-item"><a href="#">項目別ランキング</a></li>
                  <li class="panel-item"><a href="#">自治体特徴ピックアップ</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-title js-dropdown" href="#">研究者向けコンテンツ</a>
              <div class="panel js-dropdown-menu">
                <ul class="panel-inner">
                  <li class="panel-item"><a href="#">自治体別ユニット選択</a></li>
                  <li class="panel-item"><a href="#">議員別ユニット選択</a></li>
                  <li class="panel-item"><a href="#">議案別ユニット選択</a></li>
                  <li class="panel-item"><a href="#">議員発言抽出</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-title js-dropdown" href="#">このサイトについて</a>
              <div class="panel js-dropdown-menu">
                <ul class="panel-inner">
                  <li class="panel-item"><a href="#">はじめに</a></li>
                  <li class="panel-item"><a href="#">注意事項</a></li>
                  <li class="panel-item"><a href="#">お問い合わせ</a></li>
                  <li class="panel-item"><a href="#">リンク</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </header>



<div id="all_content" class="l-content">
<!--
<img src="./img/lakuda_img.png">
地方自治比較サイト
-->
<div id="subtitle">
    地方自治情報ポータルサイト
</div>

<div id="maincontent">
    <table class="choice-content">
        <div class="option">
     <td VALIGN=top>
      <h>年度</h><br>
      <select name="年度">
      <option>平成26</option>
      <option>平成25</option>
      <option>平成24</option>
      <option>平成23</option>
      </select>
    </td>

    <td VALIGN=top>
      <h>都道府県</h><br>
      <select name="都道府県">
      <option>大阪</option>
      <option>兵庫</option>
      <option>京都</option>
      </select>
    </td>

    <td VALIGN=top>
      <h>市町区村</h><br>
      <select name="大阪市区町村" id="OsakaCity01">
      <option value="大阪市">大阪市</option>
      <option value="堺市">堺市</option>
      <option value="岸和田市">岸和田市</option>
      <option value="豊中市">豊中市</option>
      <option value="池田市">池田市</option>
      <option value="吹田市">吹田市</option>
      <option value="泉大津市">泉大津市</option>
      <option value="高槻市">高槻市</option>
      <option value="貝塚市">貝塚市</option>
      <option value="守口市">守口市</option>
      <option value="枚方市">枚方市</option>
      <option value="茨木市">茨木市</option>
      <option value="八尾市">八尾市</option>
      <option value="泉佐野市">泉佐野市</option>
      <option value="富田林市">富田林市</option>
      <option value="寝屋川市">寝屋川市</option>
      <option value="河内長野市">河内長野市</option>
      <option value="松原市">松原市</option>
      <option value="大東市">大東市</option>
      <option value="和泉市">和泉市</option>
      <option value="箕面市">箕面市</option>
      <option value="柏原市">柏原市</option>
      <option value="羽曳野市">羽曳野市</option>
      <option value="門真市">門真市</option>
      <option value="摂津市">摂津市</option>
      <option value="高石市">高石市</option>
      <option value="藤井寺市">藤井寺市</option>
      <option value="東大阪市">東大阪市</option>
      <option value="泉南市">泉南市</option>
      <option value="四條畷市">四條畷市</option>
      <option value="交野市">交野市</option>
      <option value="大阪狭山市">大阪狭山市</option>
      </select>
    </td>

    <td VALIGN=top>
      <h>議会</h><br>
      <select name="議会">
      <option>---</option>
      <option>第1回</option>
      <option>第2回</option>
      </select>
    </td>

    <!--<td VALIGN=top>
      <h>議員</h><br>
      <select name="議員">
      <option>Aさん</option>
      </select>
    </td>-->
   </div>
  </table>


  <!--ここにワードクラウド-->
  <div class="wordcloud"><!--スペル変更cssも-->

    <iframe id="wordcloudframe" src="../WCsample_test2/word_cloud.php"></iframe><br><!--高瀬変更-->
  <input type="button" class="addwordcloud" value="他の条件と比較する"/>

  </div>
</div><!--maincontent終わり-->
<div id="clone01"></div>
<div id="clone02"></div>









<div class="result" id="result" style="display:block;">
<table>
<!--複製01/10-->
<table class="choice-content2">
   <div class="option">
     <td VALIGN=top>
      <h>年度</h><br>
      <select name="年度">
      <option>平成26</option>
      <option>平成25</option>
      <option>平成24</option>
      <option>平成23</option>
      </select>
    </td>

    <td VALIGN=top>
      <h>都道府県</h><br>
      <select name="都道府県">
      <option>大阪</option>
      <option>兵庫</option>
      <option>京都</option>
      </select>
    </td>

    <td VALIGN=top>
      <h>市町区村</h><br>
      <select name="大阪市区町村" id="OsakaCity02">
      <option value="大阪市">大阪市</option>
      <option value="堺市">堺市</option>
      <option value="岸和田市">岸和田市</option>
      <option value="豊中市">豊中市</option>
      <option value="池田市">池田市</option>
      <option value="吹田市">吹田市</option>
      <option value="泉大津市">泉大津市</option>
      <option value="高槻市">高槻市</option>
      <option value="貝塚市">貝塚市</option>
      <option value="守口市">守口市</option>
      <option value="枚方市">枚方市</option>
      <option value="茨木市">茨木市</option>
      <option value="八尾市">八尾市</option>
      <option value="泉佐野市">泉佐野市</option>
      <option value="富田林市">富田林市</option>
      <option value="寝屋川市">寝屋川市</option>
      <option value="河内長野市">河内長野市</option>
      <option value="松原市">松原市</option>
      <option value="大東市">大東市</option>
      <option value="和泉市">和泉市</option>
      <option value="箕面市">箕面市</option>
      <option value="柏原市">柏原市</option>
      <option value="羽曳野市">羽曳野市</option>
      <option value="門真市">門真市</option>
      <option value="摂津市">摂津市</option>
      <option value="高石市">高石市</option>
      <option value="藤井寺市">藤井寺市</option>
      <option value="東大阪市">東大阪市</option>
      <option value="泉南市">泉南市</option>
      <option value="四條畷市">四條畷市</option>
      <option value="交野市">交野市</option>
      <option value="大阪狭山市">大阪狭山市</option>
      </select>
    </td>
   </div>
  </table>

<h3>＜地域データ＞</h3>
<input type="button" value="議員名簿">
<p>議員数　33人</p>
<p>平均年齢 51.5歳</p>
<p>箕面市の発言ワード検索<input type="text"></p>
<p>議会名・日付検索<input tyoe="text"></p>

<input type="button" class="drawchartsex" value="男女比のグラフ作成"/><br>
<input type="button" class="drawchartthinkingtime" value="各市町村の審議時間"/><br>
<input type="button" class="drawchartagree" value="議会数に対しての反対議員の有無"/><br>
<input type="button" class="drawcharthutaku" value="議案数に対して委員会付託率"/>

<div id="outputchart"></div>
<div id="outputchart2"></div>
<div id="outputchart3"></div>
<div id="outputchart4"></div>


</table>
</div>
</div> <!-- id:all_content -->


</body>
</html>