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
  <div id="block-hover" style="float: left; background-color:gray;" ></div>
  <div id="block-header" style="float: left; background-color:Tomato;" ></div>
  <div id="block-service" style="float: left; background-color:Tomato;" ></div>
  <div id="block-chart-main" style="float: left; background-color:black;" >
  main
  </div>
  <div id="block-chart-sub" style="float: left; background-color:black;" >
  sub
    <div id="block-chart-sub-1" style="float: left; background-color:blue;" >
    sub1
    </div>
    <div id="block-chart-sub-2" style="float: left; background-color:blue;" >
    sub2
    </div>
  </div>
  <div id="block-footer" style="background-color:Tomato;" ></div>
  <div id="block-debug" style="background-color:Tomato;" ></div>
    <?php var_dump($_GET); ?>
    <?php var_dump($symbol); ?>
  </div>
</body>
</html>


