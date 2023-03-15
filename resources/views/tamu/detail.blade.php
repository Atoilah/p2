<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Hotel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.png" />
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/css/dashlite.css" />
    <link rel="stylesheet" href="/css/theme.css" />
    <link id="skin-default" rel="stylesheet" href="/css/theme.css" />
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/fontawesome-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/themify-icons.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap-icons.css">
    
    <!-- Scripts -->
</head>

<body class="bg-white" onload="printPromot()">
    <div class="nk-block">
        <div class="invoice invoice-print">
            <div class="invoice-wrap">
                <div class="invoice-brand text-center">
                    <img src="/images/logo-dark.png" srcset="/images/logo-dark2x.png 2x" alt="">
                </div>
                <div class="invoice-head">
                    <div class="invoice-contact">
                        <span class="overline-title">Invoice To</span>
                        <div class="invoice-contact-info">
                            <h4 class="title">Gregory Anderson</h4>
                            <ul class="list-plain">
                                <li><em class="icon ni ni-map-pin-fill fs-18px"></em><span>House #65, 4328 Marion Street<br>Newbury, VT 05051</span></li>
                                <li><em class="icon ni ni-call-fill fs-14px"></em><span>+012 8764 556</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="invoice-desc">
                        <h3 class="title">Invoice</h3>
                        <ul class="list-plain">
                            <li class="invoice-id"><span>Invoice ID</span>:<span>66K5W3</span></li>
                            <li class="invoice-date"><span>Date</span>:<span>26 Jan, 2020</span></li>
                        </ul>
                    </div>
                </div><!-- .invoice-head -->
                <div class="invoice-bills">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="w-150px">Item ID</th>
                                    <th class="w-60">Description</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>24108054</td>
                                    <td>Dashlite - Conceptual App Dashboard - Regular License</td>
                                    <td>$40.00</td>
                                    <td>5</td>
                                    <td>$200.00</td>
                                </tr>
                                <tr>
                                    <td>24108054</td>
                                    <td>6 months premium support</td>
                                    <td>$25.00</td>
                                    <td>1</td>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <td>23604094</td>
                                    <td>Invest Management Dashboard - Regular License</td>
                                    <td>$131.25</td>
                                    <td>1</td>
                                    <td>$131.25</td>
                                </tr>
                                <tr>
                                    <td>23604094</td>
                                    <td>6 months premium support</td>
                                    <td>$78.75</td>
                                    <td>1</td>
                                    <td>$78.75</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Subtotal</td>
                                    <td>$435.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Processing fee</td>
                                    <td>$10.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">TAX</td>
                                    <td>$43.50</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Grand Total</td>
                                    <td>$478.50</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div><!-- .invoice-bills -->
            </div><!-- .invoice-wrap -->
        </div><!-- .invoice -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            window.print();
        }
    </script>
</body>

</html>
