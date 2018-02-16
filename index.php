<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
<!--   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> -->

  <!-- Site Properties -->
  <title>Koin</title>
  <link rel="stylesheet" type="text/css" href="dist/semantic.css">
  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">
  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="dist/semantic.js"></script>

  <style type="text/css">
  body {
    padding: 1em;
    background-color: #FFFFFF;
    /*font-family: Helvetica Neue;*/
    #font-size: 110%;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }

  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="/" class="header item">MARKET VIP BITCOIN.CO.ID</a>
    </div>
  </div>

  <div class="ui main container">
    <div class="ui secondary  menu">
      <a href="/" class="item active" id="priceLastmenubtc">HOME</a>
      <a href="btc.php" class="item" id="priceLastmenubtc">BTC</a>
      <a href="bch.php" class="item" id="priceLastmenubch">BCH</a>
      <a href="btg.php" class="item" id="priceLastmenubtg">BTG</a>
      <a href="eth.php" class="item" id="priceLastmenueth">ETH</a>
      <a href="etc.php" class="item" id="priceLastmenuetc">ETC</a>
      <a href="ignis.php" class="item" id="priceLastmenuignis">IGNIS</a>
      <a href="ltc.php" class="item" id="priceLastmenultc">LTC</a>
      <a href="nxt.php" class="item" id="priceLastmenunxt">NXT</a>
      <a href="ten.php" class="item" id="priceLastmenuten">TEN</a>
      <a href="waves.php" class="item" id="priceLastmenuwaves">WAVES</a>
      <a href="xlm.php" class="item" id="priceLastmenuxlm">XLM</a>
      <a href="xrp.php" class="item" id="priceLastmenuxrp">XRP</a>
      <a href="xzc.php" class="item" id="priceLastmenubxzc">XZC</a>
    </div>

<center>
<br>

<table class="ui celled padded table">
  <thead>
  <tr>
    <th width="16%">MARKET</th>
    <th width="16%">HARGA</th>
    <th width="16%">VOLUME</th>
  </tr>
</thead>
  <tr>
    <td>BTC</td>
    <td id="btcLastIdr">0</td>
    <td id="totalVIPbtc">0</td>
  </tr>
    <tr>
    <td>BCH</td>
    <td id="bchLastIdr">0</td>
    <td id="totalVIPbch">0</td>
  </tr>
  <tr>
    <td>ETH</td>
    <td id="ethLastIdr">0</td>
    <td id="totalVIPeth">0</td>
  </tr>  
  <tr>
    <td>ETC</td>
    <td id="etcLastIdr">0</td>
    <td id="totalVIPetc">0</td>
  </tr>  
  <tr>
    <td>IGNIS</td>
    <td id="ignisLastIdr">0</td>
    <td id="totalVIPignis">0</td>
  </tr>
  <tr>
    <td>NXT</td>
    <td id="nxtLastIdr">0</td>
    <td id="totalVIPnxt">0</td>
  </tr>
  <tr>
    <td>TEN</td>
    <td id="tenLastIdr">0</td>
    <td id="totalVIPten">0</td>
  </tr>      
  <tr>
    <td>LTC</td>
    <td id="ltcLastIdr">0</td>
    <td id="ltc">0</td>
  </tr>
  <tr>
    <td>WAVES</td>
    <td id="wavesLastIdr">0</td>
    <td id="totalVIPwaves">0</td>
  </tr>
  <tr>
    <td>XLM</td>
    <td id="xlmLastIdr">0</td>
    <td id="totalVIPxlm">0</td>
  </tr>
  <tr>
    <td>XRP</td>
    <td id="xrpLastIdr">0</td>
    <td id="totalVIPxrp">0</td>
  </tr>
  <tr>
    <td>XZC</td>
    <td id="xzcLastIdr">0</td>
    <td id="totalVIPxzc">0</td>
  </tr>
</table>
<br>




<br><br>
<p>Code with <i class="empty heart icon"></i> by <a href="https://web.facebook.com/#">K</a></p>
<p><i class=" empty fork icon"></i>Fork this project on <a href="https://github.com/zone-h/market.vip.bitcoin.co.id">Github</a></p>
<br><br>
</center>

  </div> <!-- end ui main text -->

<script>
  
function convertToRupiah(angka)
{
  var rupiah = '';    
  var angkarev = angka.toString().split('').reverse().join('');
  for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
  return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}

$(document).ready(function () {

  function price(){
    var btcPrice = (function () {
    var btcPrice = null;
      $.ajax({
          'async': false,
          'global': false,
          'url': "https://vip.bitcoin.co.id/api/btc_idr/ticker",
          'dataType': "json",
          'success': function (data) {
              btcPrice = data.ticker.last;
          }
      });
    return btcPrice;
    })(); 
    
    $.getJSON('https://vip.bitcoin.co.id/api/btc_idr/ticker', function(data) {
    document.getElementById('btcLastIdr').innerHTML = convertToRupiah(btcPrice);
    document.getElementById('totalVIPbtc').innerHTML = Math.floor(data.ticker.vol_btc)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/btc_btc/ticker', function(data) {
      document.getElementById('btcLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/xrp_idr/ticker', function(data) {
      document.getElementById('xrpLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPxrp').innerHTML = Math.floor(data.ticker.vol_xrp)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/xrp_btc/ticker', function(data) {
      document.getElementById('xrpLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/str_idr/ticker', function(data) {
      document.getElementById('xlmLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPstr').innerHTML = Math.floor(data.ticker.vol_str)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/str_btc/ticker', function(data) {
      document.getElementById('xlmLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/nxt_idr/ticker', function(data) {
      document.getElementById('nxtLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPnxt').innerHTML = Math.floor(data.ticker.vol_nxt)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/nxt_btc/ticker', function(data) {
      document.getElementById('nxtLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });


    $.getJSON('https://vip.bitcoin.co.id/api/ten_idr/ticker', function(data) {
      document.getElementById('tenLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPten').innerHTML = Math.floor(data.ticker.vol_ten)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/ten_btc/ticker', function(data) {
      document.getElementById('tenLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/ltc_idr/ticker', function(data) {
      document.getElementById('ltcLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPltc').innerHTML = Math.floor(data.ticker.vol_ltc)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/ltc_btc/ticker', function(data) {
      document.getElementById('ltcLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/eth_idr/ticker', function(data) {
      document.getElementById('ethLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPeth').innerHTML = Math.floor(data.ticker.vol_eth)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/eth_btc/ticker', function(data) {
      document.getElementById('ethLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/xzc_idr/ticker', function(data) {
      document.getElementById('xzcLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPxzc').innerHTML = Math.floor(data.ticker.vol_xzc)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/xzc_btc/ticker', function(data) {
      document.getElementById('xzcLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/waves_idr/ticker', function(data) {
      document.getElementById('wavesLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPwaves').innerHTML = Math.floor(data.ticker.vol_waves)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/waves_btc/ticker', function(data) {
      document.getElementById('wavesLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/xlm_idr/ticker', function(data) {
      document.getElementById('xlmLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPxlm').innerHTML = Math.floor(data.ticker.vol_xlm)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/xlm_btc/ticker', function(data) {
      document.getElementById('xlmLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/bch_idr/ticker', function(data) {
      document.getElementById('bchLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPbch').innerHTML = Math.floor(data.ticker.vol_bch)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/bch_btc/ticker', function(data) {
      document.getElementById('bchLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/etc_idr/ticker', function(data) {
      document.getElementById('etcLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPetc').innerHTML = Math.floor(data.ticker.vol_etc)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/etc_btc/ticker', function(data) {
      document.getElementById('etcLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/ignis_idr/ticker', function(data) {
      document.getElementById('ignisLastIdr').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('totalVIPignis').innerHTML = Math.floor(data.ticker.vol_ignis)
    });
    $.getJSON('https://vip.bitcoin.co.id/api/ignis_btc/ticker', function(data) {
      document.getElementById('ignisLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

  }



setInterval(price, 2000);

});
</script>
</body>

</html>
