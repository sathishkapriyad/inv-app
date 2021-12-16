<!doctype html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'iskpota', sans-serif;
        }

    </style>
    <title>Toilet Full Job</title>
</head>

<body>
    <div><br><br><br><br>
        <div style="clear:both;">
            <p style="margin-top: 0pt; margin-bottom: 0pt; text-align: left; line-height: normal; font-size: 10pt;">
                <span> අනු</span>&nbsp;<span>අංකය</span>:
                    {{$invoice->quotation_no}}</strong></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:normal;">&nbsp;</p>
        </div>
        <table width="600">
            <tr>
                <td width="200">
                    <p
                        style="margin-top: 0pt; margin-bottom: 0pt; text-align: left; line-height: normal; font-size: 10pt;">
                        {{$invoice->visiting->user_address}}</p>
                </td>
                <td width="150">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               
                <td>
                    <p
                        style="margin-top: 0pt; margin-bottom: 0pt; text-align: left; line-height: normal; font-size: 10pt;">
                        <span>දිනය</span> :&nbsp;{{$invoice->created_at->format('Y-m-d')}}
                    </p>
                </td>
                <td>
                    <p
                        style="margin-top: 0pt; margin-bottom: 0pt; text-align: left; line-height: normal; font-size: 10pt;">
                        <span>&nbsp;දුක</span> :&nbsp;{{$invoice->visiting->contact_no}}
                    </p>
                </td>
            </tr>


        </table>

        <p style="margin-top: 12pt; margin-bottom: 8pt; text-align: left; line-height: 107%; font-size: 10pt;">
            <br><span>{{intval($invoice->toiletFullJobInvoices[0]['quantity'])}}&nbsp;දෙනෙකුගේ භාවිතයට වැසිකිලි පද්ධතියට පරවැව
                ඉදිකිරිම සඳහා ඇස්තමේන්තුව.</span></p>
        {{-- <table cellpadding="0" cellspacing="0"
            style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;"> --}}
        <table border="1" style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;">
            <tbody>
                <tr style="height:34.15pt;">
                    <td
                        style="width:33.95pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>අනු</span><span dir="rtl" style="font-weight:bold;">&nbsp;</span>අංකය
                        </p>
                    </td>
                    <td
                        style="width:177.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>විස්තරය</span></p>
                    </td>
                    <td
                        style="width:35.35pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>ඒකකය</span></p>
                    </td>
                    <td
                        style="width:38.7pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>ප්‍රමාණය</span>
                        </p>
                    </td>
                    <td
                        style="width:61.85pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>එකක</span>&nbsp;<span>මිල</span>
                        </p>
                    </td>
                    <td
                        style="width:83.05pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>මුදල</span></p>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>{{$invoice->toiletFullJobInvoices[1]['width']}} x
                        {{$invoice->toiletFullJobInvoices[1]['height']}} x
                        {{$invoice->toiletFullJobInvoices[1]['length']}}
                        &nbsp;<span style="font-family: iskpota">ප්‍රමාණයට වල කැපීම.</span></td>
                    <td><span>අයිතම</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[1]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[1]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[1]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td><span>ප්‍රමාණයට පරවැව ඉදිකිරිම.</span></td>
                    <td><span>අයිතම</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[2]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[2]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[2]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>{{$invoice->toiletFullJobInvoices[3]['width']}} x
                        {{$invoice->toiletFullJobInvoices[3]['height']}} x
                        {{$invoice->toiletFullJobInvoices[3]['length']}}
                        &nbsp;<span>ප්&zwj;රමාණයට පරවැව ඉදිකිරිම.</span></td>
                    <td><span>ගණන</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[3]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[3]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[3]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td><span>අවශ්‍ය පරිදි 4” PVC නල එලීම.</span></td>
                    <td><span>දික් අඩි</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[4]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[4]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[4]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>05</td>
                    <td><span>අවශ්‍ය පරිදි 1½ PVC Vent බටය දැමීම.</span></td>
                    <td><span>දික් අඩි</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[5]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[5]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[5]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td><span>2’ x 2’ මනුකිල ඉදිකිරිම.</span></td>
                    <td><span>ගණන</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[6]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[6]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[6]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>07</td>
                    <td><span>වල මතුපිට 10mm දඟර කම්බි යොදා වරගන්වා 6” c/c ඝනකමට කොන්ක්‍රීට් කිරීම.</span></td>
                    <td><span>වර්ග අඩි</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[7]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[7]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[7]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>08</td>
                    <td><span>ප්‍රවාහන ගාස්තු</span></td>
                    <td><span>අයිතම</span></td>
                    <td><span dir="rtl">{{$invoice->toiletFullJobInvoices[8]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[8]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletFullJobInvoices[8]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>09</td>
                    <td>{{$invoice->toiletFullJobInvoices[9]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[9]['extra_item']== '' || $invoice->toiletFullJobInvoices[9]['extra_item'] == 'null' ? '' : $invoice->toiletFullJobInvoices[9]['extra_item']}}
                    </td>
                    <td></td>
                    <td>{{$invoice->toiletFullJobInvoices[9]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[9]['extra_item']== '' || $invoice->toiletFullJobInvoices[9]['extra_item'] == 'null' ? '' : $invoice->toiletFullJobInvoices[9]['quantity']}}
                    </td>
                    <td>{{$invoice->toiletFullJobInvoices[9]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[9]['extra_item']== '' || $invoice->toiletFullJobInvoices[9]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletFullJobInvoices[9]['unit_price'],2)}}
                    </td>
                    <td>{{$invoice->toiletFullJobInvoices[9]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[9]['extra_item']== '' || $invoice->toiletFullJobInvoices[9]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletFullJobInvoices[9]['total'],2)}}
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>{{$invoice->toiletFullJobInvoices[10]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[10]['extra_item']== '' || $invoice->toiletFullJobInvoices[10]['extra_item'] == 'null' ? '' : $invoice->toiletFullJobInvoices[10]['extra_item']}}
                    </td>
                    <td></td>
                    <td>{{$invoice->toiletFullJobInvoices[10]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[10]['extra_item']== '' || $invoice->toiletFullJobInvoices[10]['extra_item'] == 'null' ? '' : $invoice->toiletFullJobInvoices[10]['quantity']}}
                    </td>
                    <td>{{$invoice->toiletFullJobInvoices[10]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[10]['extra_item']== '' || $invoice->toiletFullJobInvoices[10]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletFullJobInvoices[10]['unit_price'],2)}}
                    </td>
                    <td>{{$invoice->toiletFullJobInvoices[10]['extra_item'] == '0' || $invoice->toiletFullJobInvoices[10]['extra_item']== '' || $invoice->toiletFullJobInvoices[10]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletFullJobInvoices[10]['total'],2)}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4">මුළු එකතුව</td>
                    @php
                    $first=$invoice->toiletFullJobInvoices[9]['total'];
                    $second=$invoice->toiletFullJobInvoices[10]['total'];
                    if ($invoice->toiletFullJobInvoices[9]['extra_item'] == '0' ||
                    $invoice->toiletFullJobInvoices[9]['extra_item']== '' ||
                    $invoice->toiletFullJobInvoices[9]['extra_item'] == 'null') {
                    $first=0;
                    }
                    if ($invoice->toiletFullJobInvoices[10]['extra_item'] == '0' ||
                    $invoice->toiletFullJobInvoices[10]['extra_item']== '' ||
                    $invoice->toiletFullJobInvoices[10]['extra_item'] == 'null') {
                    $second=0;
                    }
                    @endphp
                    <td>Rs {{number_format(floatval($invoice->toiletFullJobInvoices[1]['total'] + $invoice->toiletFullJobInvoices[2]['total'] + $invoice->toiletFullJobInvoices[3]['total'] + $invoice->toiletFullJobInvoices[4]['total'] + $invoice->toiletFullJobInvoices[5]['total'] + $invoice->toiletFullJobInvoices[6]['total'] + $invoice->toiletFullJobInvoices[7]['total'] + $invoice->toiletFullJobInvoices[8]['total'] + $first + $second),2)}}
                    </td>
                </tr>
                {{-- <tr style="height:86.35pt;">
                    <td
                        style="width:33.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">&nbsp;</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">01</span><span dir="ltr">.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">02.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">03.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">04.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">05.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">06.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">07.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">08.</p>
                    </td>
                    <td
                        style="width:177.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p>&nbsp;</p>
                        <p style="margin-top:20pt; margin-bottom:0pt; font-size:10pt;">{width} x {height} x
                            {length}. <span charset="utf-8">ප්‍රමාණයට වල කැපීම. &nbsp;</span></p>
                        <p style="margin-top:12pt; margin-bottom:0pt; font-size:10pt;"><span>කපන ලද පස් ප්‍රවාහනය කර
                                ඉවත් කිරීම.</span></p>
                        <p style="margin-top:12pt; margin-bottom:0pt; font-size:10pt;">{width} x {height} x {length}
                            <span>ප්&zwj;රමාණයට පරවැව ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span>අවශ්&zwj;ය පරිදි 4&rdquo;
                                PVC නල එලීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span>අවශ්&zwj;ය පරිදි
                                1</span>&frac12; <span>PVC Vent බටය දැමීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span>2&rsquo; x 2&rsquo; මනුකිල
                                ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span>වල මතුපිට&nbsp;</span><span
                                dir="rtl">10</span><span dir="ltr">mm</span> <span>දඟර කම්බි යොදා වරගන්වා
                                6&rdquo;&nbsp;</span>c/c <span>ඝනකමට කොන්ක්&zwj;රීට් කිරීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span>ප්&zwj;රවාහන ගාස්තු</span>
                        </p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%; font-size:10pt;">
                            &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.........
                        </p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%; font-size:10pt;">
                            &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.........
                        </p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%; font-size:10pt;">
                            &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.........
                        </p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:10pt;">
                            <span>මුළු</span><span dir="rtl"
                                style="font-weight:bold;">&nbsp;</span>එකතුව</p>
                    </td>
                    <td
                        style="width:35.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>අයිතම</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>අයිතම</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
    
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>දික්</span> <span>අඩි</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>දික්</span> <span>අඩි</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>වර්ග</span> <span>අඩි</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>අයිතම</span></p>
                    </td>
                    <td
                        style="width:38.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">........</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">........</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                      
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                    </td>
                    <td
                        style="width:61.85pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td
                        style="width:83.05pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">
                            <strong>&nbsp;</strong></p>
                    </td>
                </tr> --}}
            </tbody>
        </table>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:14pt;">
            <strong><span>බැංකු</span></strong><strong>&nbsp;</strong><strong><span>විස්තර</span></strong><strong>&nbsp;:-</strong>
        </p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ගිණුමේ</span><span style="font-family:'Times New Roman';">&nbsp;</span><span>නම</span><span
                    style="width:13.7pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="font-family:'Times New Roman';">&nbsp;-
                    &nbsp;&nbsp;&nbsp;&nbsp;</span><span>පරවැව</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span>ක්</span><span
                    style="font-family:'Times New Roman';">&zwj;</span><span>රමය</span><span
                    style="font-family:'Times New Roman';">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>බැංකුවේ</span><span style="font-family:'Times New Roman';">&nbsp;</span><span>නම</span><span
                    style="width:8.95pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="font-family:'Times New Roman';">- &nbsp;&nbsp;&nbsp;&nbsp;</span><span>සම්පත්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span>බැංකුව</span><span
                    style="font-family:'Times New Roman';">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ශාඛාව</span><span style="width:5.77pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;&nbsp;</span><span
                    style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;-
                    &nbsp;&nbsp;&nbsp;&nbsp;</span><span>පිළියන්දල</span><span
                    style="font-family:'Times New Roman';">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ගිණුම්</span><span style="font-family:'Times New Roman';">&nbsp;</span><span>අංකය</span><span
                    style="width:12.89pt; display:inline-block;">&nbsp;</span><span
                    style="width:32pt; display:inline-block;">&nbsp;</span><span
                    style="font-family:'Times New Roman';">- 001910016616</span></li>
        </ul>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:4pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:14pt;"><strong>&nbsp;</strong></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:14pt;">
            <strong><span>සැ</span></strong><strong>.&nbsp;</strong><strong><span>යු</span></strong><strong>&nbsp;:-</strong>
        </p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:150%; padding-left:7.48pt; font-family:serif;">
                <div
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
                    <p><span style='line-height:150%;font-family:"Iskoola Pota",sans-serif;'>ඔබ විසින් වැලි
                            <strong>කියුබ්&nbsp;</strong></span><strong><span
                                style="line-height:150%;font-size:16px;">&hellip;&hellip;&nbsp;</span></strong><strong><span
                                style='line-height:150%;font-family:"Iskoola Pota",sans-serif;font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>ක්</span></strong><span
                            style='line-height:150%;font-family:"Iskoola Pota",sans-serif;font-family:"Iskoola Pota",sans-serif;font-size:12.0pt;'>&nbsp;ලබා
                            දිය යුතුය.</span></p>
                </div>
            </li>
            <li>
                <div id="isPasted"
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
                    <ul style="margin-bottom:0in;list-style-type: disc;">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
                            <span style='line-height:150%;font-family:"Iskoola Pota",sans-serif;'>ඇස්තමේන්තු ගත මුදලින්
                                50%ක තැන්පතුවක් වැඩ ආරම්භ කිරීමට ප්&zwj;රථම අවශ්&zwj;ය වෙයි. වැඩ අවසන් වූ පසු ඉතිරි මුදල
                                ගෙවිය යුතුය.</span></li>
                    </ul>
                </div>
            </li>
            <li>
                <div id="isPasted"
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
                    <ul style="margin-bottom:0in;list-style-type: disc;">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
                            <span style='line-height:150%;font-family:"Iskoola Pota",sans-serif;'>ඇස්තමේන්තුව වලංගු කාලය
                                දින 45කි.</span></li>
                    </ul>
                </div>
            </li>
            <li>
                <div id="isPasted"
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
                    <ul style="margin-bottom:0in;list-style-type: disc;">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;text-align:justify;line-height:106%;font-size:16px;font-family:"Times New Roman",serif;'>
                            <span style='line-height:150%;font-family:"Iskoola Pota",sans-serif;'>වල කැපීමේදී Bathroom
                                බටය <strong>(4&rdquo; PVC බටය)</strong> මට්ටමේ සිට අඩි 5ක් හෝ ඊට ඉහලින් භූගත ජල මට්ටම
                                පවතී නම්, ඇස්තමේන්තුගත මිල ගණන් වෙනස් වනු ඇත. එවිට, වසර 10ක පමණක් වගකීමක් ලැබේ.</span>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <p id="isPasted"
            style='margin-top:12.0pt;margin-right:0in;margin-bottom:0in;margin-left:0in;text-align:justify;line-height:115%;font-size:16px;font-family:"Times New Roman",serif;'>
            <span style='line-height:50%;font-family:"Iskoola Pota",sans-serif;'>කිසියම් ගැටළුවක් ඇතොත් ඕනෑම අවස්ථාවක
                පිළිතුරු සැපයීමට අප ඔබ වෙනුවෙන් කැපවී සිටින බවත්, ඒ සදහා අප හා සම්බන්ධ වන ලෙසත් දන්වමු.</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:50%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:50%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:50%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:50%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:50%; font-size:9pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt;"><span dir="rtl">....................................</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span style="width:36pt; display:inline-block;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span><span dir="rtl">....................................</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt;"><span>දිනය</span><span
                style="width:13.2pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; text-indent:0pt; display:inline-block;">
                &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>අත්සන</span><span dir="rtl">&nbsp;</span></p>
    </div>
</body>

</html>
