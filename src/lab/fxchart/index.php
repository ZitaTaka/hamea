<?php
  // symbol processing area
  //    symbol dictionary
  $dicSymbol = array(
    "EURUSD"  =>  array( "symbol" => "EURUSD", "display" => "EUR/USD", "cur1" => "EUR", "cur2" => "USD"),
    "USDJPY"  =>  array( "symbol" => "USDJPY", "display" => "USD/JPY", "cur1" => "USD", "cur2" => "JPY"),
    "default"  =>  array( "symbol" => "EURUSD", "display" => "EUR/USD", "cur1" => "EUR", "cur2" => "USD"),
  );
  $reqSymbol=$_GET['symbol'];
  $symbol='';
  if ( array_key_exists($reqSymbol, $dicSymbol) ) {
    $symbol = $dicSymbol[$reqSymbol];
  }else{
    $symbol = $dicSymbol['default'];
  };
?>
<html>
<head>
  <title><?php echo $symbol['display']; ?></title>
  <style type="text/css">
    body { margin: 0; padding: 0; }

    /* portrait style */
    @media screen and (orientation:portrait){
      p {font-size: 1em; }  
    }
    /* landscape style */
    @media screen and (orientation:landscape){
      .block-chart {
        float: left;
        width: 70%;   height: 95%;
      }
      .block-support {
        float: left;
        width: 25%;   height: 95%;
      }
      .block-main {
        float: left;
        width: 100%;  height: 70%;
      }
      .block-sub {
        float: left;
        width: 50%;   height: 30%;
      }
    }
  </style>
  <script language="text/javascript">
      function build_screen(){

      };
      function isLandscape(){
        // landscape view : true
        // portrait view : false
        return (window.innerHeight < window.innerWidth)
      }
  </script>
</head>
<body>

<?php # ---- ---- ---- ---- ---- ---- ---- ----
      #   広告表示領域
      # ---- ---- ---- ---- ---- ---- ---- ---- ?>
  <div id="block-service" style="float: left; background-color:Tomato;" ></div>

<?php # ---- ---- ---- ---- ---- ---- ---- ----
      #   ヘッダー領域
      # ---- ---- ---- ---- ---- ---- ---- ---- ?>
  <div id="block-header" >
  </div>

<?php # ---- ---- ---- ---- ---- ---- ---- ----
      #   チャート表示領域
      # ---- ---- ---- ---- ---- ---- ---- ---- ?>
  <div id="block-chart" >
    <div id="block-main" >
    main
    </div>
    <div id="block-sub"  >
      <div id="block-sub-1" >
      sub1
      </div>
      <div id="block-sub-2" >
      sub2
      </div>
    </div>
  </div>

<?php # ---- ---- ---- ---- ---- ---- ---- ----
      #   サポート情報表示領域
      # ---- ---- ---- ---- ---- ---- ---- ---- ?>
  <div id="block-support" >
  </div>

<?php # ---- ---- ---- ---- ---- ---- ---- ----
      #   フッター領域
      # ---- ---- ---- ---- ---- ---- ---- ---- ?>
  <div id="block-footer" style="background-color:Tomato;" >
  </div>

<?php # ---- ---- ---- ---- ---- ---- ---- ----
      #   デバッグ領域
      # ---- ---- ---- ---- ---- ---- ---- ---- ?>
  <div id="block-debug">
    <?php var_dump($_GET); ?>
    <?php var_dump($symbol); ?>
  </div>
</body>
</html>


