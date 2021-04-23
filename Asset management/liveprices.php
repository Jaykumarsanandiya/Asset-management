<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Asset Building</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="gold.html">Gold <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="Banking.html">Saving Account <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="fd.html">FD<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="IndexFunds.html">IndexFunds<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="insurance.html">Insurance<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="GovSec.html">Govt. Security<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="RealEstate.html">Real Estate<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="stock.html">Stock<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="calculator.php" >SIP Calculator<span class="sr-only"></span></a>
                   
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="liveprices.php">Live Prices<span class="sr-only"></span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_9e40d"></div>
        <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/NASDAQ-AAPL/"
                rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget(
                {
                    "width": 980,
                    "height": 610,
                    "symbol": "NASDAQ:AAPL",
                    "interval": "D",
                    "timezone": "Etc/UTC",
                    "theme": "light",
                    "style": "1",
                    "locale": "in",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "allow_symbol_change": true,
                    "container_id": "tradingview_9e40d"
                }
            );
        </script>
    </div>
    <!-- TradingView Widget END -->

</body>

</html>