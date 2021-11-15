<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="style.css" media="all" />
</head>
<style>
    @font-face {
        font-family: SourceSansPro;
        src: url(SourceSansPro-Regular.ttf);
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

    a {
        color: #0087C3;
        text-decoration: none;
    }

    body {
        color: #555555;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-family: SourceSansPro;
    }

    header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #AAAAAA;
    }

    #logo {
        float: left;
        margin-top: 8px;
    }

    #logo img {
        height: 70px;
    }

    #company {
        float: right;
        text-align: right;
    }


    #details {
        margin-bottom: 50px;
    }

    #client {
        padding-left: 6px;
        border-left: 6px solid #0087C3;
        float: left;
    }

    #client .to {
        color: #777777;
    }

    h2.name {
        font-size: 1.4em;
        font-weight: normal;
        margin: 0;
    }



    #invoice h1 {
        color: #0087C3;
        font-size: 2.4em;
        line-height: 1em;
        font-weight: normal;
        margin: 0  0 10px 0;
    }



    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table th,
    table td {
        padding: 20px;
        background: #EEEEEE;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    table th {
        white-space: nowrap;
        font-weight: normal;
    }

    table td {
        text-align: right;
    }

    table td h3{
        color: #57B223;
        font-size: 1.2em;
        font-weight: normal;
        margin: 0 0 0.2em 0;
    }

    table .no {
        color: #FFFFFF;
        font-size: 1.6em;
        background: #57B223;
    }

    table .desc {
        text-align: left;
    }

    table .unit {
        background: #DDDDDD;
    }

    table .qty {
    }

    table .total {
        background: #57B223;
        color: #FFFFFF;
    }

    table td.unit,
    table td.qty,
    table td.total {
        font-size: 1.2em;
    }

    table tbody tr:last-child td {
        border: none;
    }

    table tfoot td {
        padding: 10px 20px;
        background: #FFFFFF;
        border-bottom: none;
        font-size: 1.2em;
        white-space: nowrap;
        border-top: 1px solid #AAAAAA;
    }

    table tfoot tr:first-child td {
        border-top: none;
    }

    table tfoot tr:last-child td {
        color: #57B223;
        font-size: 1.4em;
        border-top: 1px solid #57B223;

    }

    table tfoot tr td:first-child {
        border: none;
    }

    #thanks{
        font-size: 2em;
        margin-bottom: 50px;
    }

    #notices{
        padding-left: 6px;
        border-left: 6px solid #0087C3;
    }

    #notices .notice {
        font-size: 1.2em;
    }

    footer {
        color: #777777;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #AAAAAA;
        padding: 8px 0;
        text-align: center;
    }


</style>
<body>
<header class="clearfix">
    <div id="logo">
        <h1> SAMA CARD</h1>
    </div>


</header>
<main>
    <div id="details" class="clearfix">
        <div id="client">
            <div class="to"><h2>INVOICE TO</h2></div>
            <h2 class="name"> Name : {{$invoice->name}}</h2>
            <div class="address">Address : {{$invoice->house}} House, {{$invoice->road}} Road, {{$invoice->block}} Block, {{$invoice->place}} Place</div>
            <div class="address">Mobile : {{$invoice->mobile}}</div>
            <div class="address">Phone :  {{$invoice->phone}}</div>
            <div class="address">Email : {{$invoice->email}}</div>
        </div>
        <div id="invoice" style="margin-left:400px">
            <h1>INVOICE-000{{$invoice->id}}</h1>
            <div class="date">Issue Date: {{$invoice->date}}</div>
        </div>
    </div>
    <table border="0" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <td class="no">id</td>
            <th class="desc">Type</th>
            <th class="desc">POLICY NO.</th>
            <th class="unit">QUANTITY</th>
            <th class="total">UNIT PRICE</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="no">1</td>
            <td class="desc">{{$invoice->Type->name ?? ' '}}</td>
            <td class="desc"><h3>SHC222 - {{$invoice->id}}</td>
            <td class="unit">1</td>
            <td class="total">{{$invoice->price}} BD</td>
        </tr>
        @if(isset($invoice1))
            @foreach($invoice1 as $invoice1)
                <tr>
                    <td class="no">1</td>
                    <td clss="desc">{{$invoice1->Type->name ?? ' '}}</td>
                    <td class="desc">SHC222 - {{$invoice1->id}}</td>
                    <td class="unit">1</td>
                    <td class="total">{{$invoice1->price}} BD</td>
                </tr>
            @endforeach
        @else
        @endif

        </tbody>
        <tfoot>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">Delivery</td>
            <td>{{$invoice->delivery  ?? ' '}} BD</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">Total</td>
            <td>{{$invoice->total ?? ' '}} BD</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">Balance</td>
            <td>{{$invoice->balance}} BD</td>
        </tr>
        </tfoot>
    </table>
    <div id="thanks">Thank you!</div>
    <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">I have received the cards from SAMA BAHRAIN CARD ?</div><br/>
        <b>---------------------</b>
    </div>
</main>
<footer>
   SAMA BAHRAIN HEALTH CARD
</footer>
</body>
</html>
