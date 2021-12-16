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
    <title>Waste Water Full Job</title>
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
            <br><span>{{intval($invoice->wasteWaterFullJobInvoices[0]['quantity'])}}දෙනෙකුගේ භාවිතයට වැසිකිලි පද්ධතියට පරවැව ඉදිකිරිම සඳහා
                ඇස්තමේන්තුව.</span></u></strong><u><span dir="rtl"
                    style="font-family:'Iskoola Pota'; font-weight:bold;">.</span></u></p>
        {{-- <table cellpadding="0" cellspacing="0"
            style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;"> --}}
            <table border="1" style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;">
            <tbody>
                <tr style="height:34.15pt;">
                    <td
                        style="width:33.95pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span >අනු</span><span dir="rtl"
                                style="font-weight:bold;">&nbsp;</span>අංකය</p>
                    </td>
                    <td
                        style="width:177.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span >විස්තරය</span></p>
                    </td>
                    <td
                        style="width:35.35pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span >ඒකකය</span></p>
                    </td>
                    <td
                        style="width:38.7pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                           <span
                                    >ප්</span>&zwj;<span
                                    >රමාණය</span></p>
                    </td>
                    <td
                        style="width:61.85pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span
                                    >එකක</span>&nbsp;<span
                                    >මිල</span></p>
                    </td>
                    <td
                        style="width:83.05pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span >මුදල</span></p>
                    </td>
                </tr>
                <tr>
                        <td>01</td>
                        <td><span>අපජලය සදහා කාමර ……… ග්රීස් ප් ඉදිකිරීමට</span>&nbsp;{{$invoice->wasteWaterFullJobInvoices[1]['width']}} x {{$invoice->wasteWaterFullJobInvoices[1]['height']}} x {{$invoice->wasteWaterFullJobInvoices[1]['length']}}
                            &nbsp;<span>ප්රමාණයට වල කැපීම.</span></td>
                        <td><span>අයිතම</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[1]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[1]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[1]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[2]['width']}} x {{$invoice->wasteWaterFullJobInvoices[2]['height']}} x {{$invoice->wasteWaterFullJobInvoices[2]['length']}}
                            &nbsp;<span>ප්රමාණයට කාමර ………. ග්රීස් ප් එකක් ඉදිකිරිම.</span></td>
                        <td><span>ගණන</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[2]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[2]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[2]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td><span>අපජලය සදහා වැලිෙපරණය හා අවෙශා්ෂණ පරවැව ඉදිකිරීමට</span>&nbsp;{{$invoice->wasteWaterFullJobInvoices[3]['width']}} x {{$invoice->wasteWaterFullJobInvoices[3]['height']}} x {{$invoice->wasteWaterFullJobInvoices[3]['length']}}
                            &nbsp;<span>ප්රමාණයට වල කැපීම.</span></td>
                        <td><span>අයිතම</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[3]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[3]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[3]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td><span>අපජලය සදහා වැලිෙපරණය ඉදිකිරිම</span></td>
                        <td><span>ගණන</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[4]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[4]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[4]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td><span>අපජලය සදහා අවෙශා්ෂණ පරවැව ඉදිකිරිම.</span></td>
                        <td><span>ගණන</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[5]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[5]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[5]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td><span>කපන ලද පස් ප්රවාහනය කර ඉවත් කිරීම.</span></td>
                        <td><span>අයිතම</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[6]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[6]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[6]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td><span>අවශ්ය පරිදි 2” PVC නල එලීම.</span></td>
                        <td><span>ික් අ</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[7]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[7]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[7]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td><span>2’ x 2’ මනුකිල ඉදිකිරිම.</span></td>
                        <td><span>ගණන</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[8]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[8]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[8]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td><p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >ග්&zwj;රීස් ට්&zwj;රැප් සදහා 1&rsquo;-6&rdquo; x
                                1&rsquo;-6&rdquo; ඩබල් සීල් මෙටල් කවර දැමීම.</span></p></td>
                        <td><span>ගණන</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[9]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[9]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[9]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >වැලිපෙරණය සදහා 2&rsquo;-6&rdquo; x 2&rsquo;-6&rdquo;
                                ඩබල් සීල් මෙටල් කවර දැමීම.</span></p></td>
                        <td><span>ගණන</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[10]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[10]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[10]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td><span>ප්රවාහන ගාස්</span></td>
                        <td><span>අයිතම</span></td>
                        <td><span dir="rtl">{{$invoice->wasteWaterFullJobInvoices[11]['quantity']}}</span></td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[11]['unit_price'],2)}}</td>
                        <td>Rs {{number_format($invoice->wasteWaterFullJobInvoices[11]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[12]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[12]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[12]['extra_item'] == 'null' ? '' : $invoice->wasteWaterFullJobInvoices[12]['extra_item']}}</td>
                        <td></td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[12]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[12]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[12]['extra_item'] == 'null' ? '' : $invoice->wasteWaterFullJobInvoices[12]['quantity']}}</td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[12]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[12]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[12]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->wasteWaterFullJobInvoices[12]['unit_price'],2)}}</td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[12]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[12]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[12]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->wasteWaterFullJobInvoices[12]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[13]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[13]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[13]['extra_item'] == 'null' ? '' : $invoice->wasteWaterFullJobInvoices[13]['extra_item']}}</td>
                        <td></td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[13]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[13]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[13]['extra_item'] == 'null' ? '' : $invoice->wasteWaterFullJobInvoices[13]['quantity']}}</td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[13]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[13]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[13]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->wasteWaterFullJobInvoices[13]['unit_price'],2)}}</td>
                        <td>{{$invoice->wasteWaterFullJobInvoices[13]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[13]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[13]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->wasteWaterFullJobInvoices[13]['total'],2)}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="4">මුළු එකතුව</td>
                        @php
                            $first=$invoice->wasteWaterFullJobInvoices[12]['total'];
                            $second=$invoice->wasteWaterFullJobInvoices[13]['total'];
                            if ($invoice->wasteWaterFullJobInvoices[12]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[12]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[12]['extra_item'] == 'null') {
                                $first=0;
                            }
                            if ($invoice->wasteWaterFullJobInvoices[13]['extra_item'] == '0' || $invoice->wasteWaterFullJobInvoices[13]['extra_item']== '' || $invoice->wasteWaterFullJobInvoices[13]['extra_item'] == 'null') {
                                $second=0;
                            }
                        @endphp
                        <td>Rs {{number_format(floatval($invoice->wasteWaterFullJobInvoices[1]['total'] + $invoice->wasteWaterFullJobInvoices[2]['total'] + $invoice->wasteWaterFullJobInvoices[3]['total'] + $invoice->wasteWaterFullJobInvoices[4]['total'] + $invoice->wasteWaterFullJobInvoices[5]['total'] + $invoice->wasteWaterFullJobInvoices[6]['total'] + $invoice->wasteWaterFullJobInvoices[7]['total'] + $invoice->wasteWaterFullJobInvoices[8]['total'] + $invoice->wasteWaterFullJobInvoices[9]['total'] + $invoice->wasteWaterFullJobInvoices[10]['total'] + $invoice->wasteWaterFullJobInvoices[11]['total']  + $first + $second),2)}}</td>
                    </tr>
                {{-- <tr style="height:86.35pt;">
                    <td
                        style="width:33.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;<span
                                dir="rtl">01</span><span dir="ltr">.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">02.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">03.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
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
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">08.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">09.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">10.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">11.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td
                        style="width:177.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >අපජලය</span> <span
                                >සදහා</span> <span
                                >කාමර</span> &hellip;&hellip;&hellip; <span
                                >ග්</span>&zwj;<span
                                >රීස්</span> <span
                                >ට්</span>&zwj;<span
                                >රැප්</span> <span
                                >ඉදිකිරීමට</span> {width} x {Height} x {Length}
                            <span >ප්&zwj;රමාණයට වල කැපීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">{Width} x
                            {Height} x {Length } <span >ප්&zwj;රමාණයට
                                කාමර&nbsp;</span>&hellip;&hellip;&hellip;. <span
                                >ග්&zwj;රීස් ට්&zwj;රැප් එකක් ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >අපජලය සදහා වැලිපෙරණය හා අවශෝෂණ පරවැව
                                ඉදිකිරීමට&nbsp;</span>{Width} x {Height} x {Length } <span
                                >ප්&zwj;රමාණයට වල කැපීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >අපජලය සදහා වැලිපෙරණය ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >අපජලය සදහා අවශෝෂණ පරවැව ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >කපන ලද පස් ප්&zwj;රවාහනය කර ඉවත් කිරීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >අවශ්&zwj;ය පරිදි 2&rdquo; PVC නල එලීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >2&rsquo; x 2&rsquo; මනුකිල ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >ග්&zwj;රීස් ට්&zwj;රැප් සදහා 1&rsquo;-6&rdquo; x
                                1&rsquo;-6&rdquo; ඩබල් සීල් මෙටල් කවර දැමීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >වැලිපෙරණය සදහා 2&rsquo;-6&rdquo; x 2&rsquo;-6&rdquo;
                                ඩබල් සීල් මෙටල් කවර දැමීම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                >ප්&zwj;රවාහන ගාස්තු</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">&nbsp;</p>
                        <p
                            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:107%; font-size:10pt;">
                            <span >මුළු</span><span dir="rtl"
                                style="font-weight:bold;">&nbsp;</span>එකතුව</p>
                    </td>
                    <td
                        style="width:35.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >අයිතම</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >අයිතම</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >අයිතම</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >දික්</span> <span
                                >අඩි</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                >අයිතම</span></p>
                    </td>
                    <td
                        style="width:38.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">........</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">&nbsp;</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
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
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">........</span></p>
                    </td>
                    <td
                        style="width:61.85pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;"><span
                                style="height:0pt; text-align:left; display:block; position:absolute; z-index:3;"></span><span
                                style="height:0pt; text-align:left; display:block; position:absolute; z-index:2;"></span>&nbsp;
                        </p>
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
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:10pt;"><strong><span
                    >බැංකු</span></strong><strong>&nbsp;</strong><strong><span
                    >විස්තර</span></strong><strong>&nbsp;:-</strong></p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:150%; padding-left:7.48pt; font-family:serif;"><span
                    >ගිණුමේ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >නම</span><span
                    style="width:13.7pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="font-family:'Times New Roman';">-&nbsp;</span><span
                    >පරවැව</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ක්</span><span
                    style="font-family:'Times New Roman';">&zwj;</span><span
                    >රමය</span><span style="font-family:'Times New Roman';">.</span>
            </li>
            <li style="margin-left:28.52pt; line-height:150%; padding-left:7.48pt; font-family:serif;"><span
                    >බැංකුවේ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >නම</span><span
                    style="width:8.95pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="font-family:'Times New Roman';">-&nbsp;</span><span
                    >සම්පත්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >බැංකුව</span><span
                    style="font-family:'Times New Roman';">.</span></li>
            <li style="margin-left:28.52pt; line-height:150%; padding-left:7.48pt; font-family:serif;"><span
                    >ශාඛාව</span><span
                    style="width:5.77pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="font-family:'Times New Roman';">-&nbsp;</span><span
                    >පිළියන්දල</span><span
                    style="font-family:'Times New Roman';">.</span></li>
            <li style="margin-left:28.52pt; line-height:150%; padding-left:7.48pt; font-family:serif;"><span
                    >ගිණුම්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >අංකය</span><span
                    style="width:12.89pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="font-family:'Times New Roman';">- 001910016616</span></li>
        </ul>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:4pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:10pt;"><strong>&nbsp;</strong></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:200%; font-size:10pt;"><strong><span
                    >සැ</span></strong><strong>.&nbsp;</strong><strong><span
                    >යු</span></strong><strong>&nbsp;:-</strong></p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:200%; padding-left:7.48pt; font-family:serif;"><span
                    >ඔබ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >විසින්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වැලි</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><strong><span
                        >කියුබ්</span></strong><strong><span
                        style="font-family:'Times New Roman';">&nbsp;&hellip;&hellip;&nbsp;</span></strong><strong><span
                        >ක්</span></strong><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ලබා</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >දිය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >යුතුය</span><span
                    style="font-family:'Times New Roman';">.</span></li>
            <li style="margin-left:28.52pt; line-height:normal; padding-left:7.48pt; font-family:serif;"><strong><span
                        >පාරිභෝගික</span></strong><strong><span
                        style="font-family:'Times New Roman';">&nbsp;</span></strong><strong><span
                        >අවශ්</span></strong><strong><span
                        style="font-family:'Times New Roman';">&zwj;</span></strong><strong><span
                        >යතාවය</span></strong><strong><span
                        style="font-family:'Times New Roman';">&nbsp;</span></strong><strong><span
                        >මත</span></strong><strong><span
                        style="font-family:'Times New Roman';">,</span></strong></li>
        </ul>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:64.03pt; line-height:115%; padding-left:3.47pt; font-family:serif;"><span
                    >ග්</span><span
                    style="font-family:'Times New Roman';">&zwj;</span><span
                    >රීස්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ට්</span><span
                    style="font-family:'Times New Roman';">&zwj;</span><span
                    >රැප්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >සදහා</span><span
                    style="font-family:'Times New Roman';">&nbsp;2&rsquo;x 2&rsquo;&nbsp;</span><span
                    >ඩබල්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >සීල්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මෙටල්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >කවර</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >දෙකක්</span><span
                    style="font-family:'Times New Roman';">(02)&nbsp;</span><span
                    >දැමීමට</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><strong><span
                        >රු</span></strong><strong><span
                        style="font-family:'Times New Roman';">.
                        ................................</span></strong><strong><span
                        >ක්</span></strong><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >අය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >කෙරේ</span><span style="font-family:'Times New Roman';">.</span>
            </li>
            <li style="margin-left:64.03pt; line-height:115%; padding-left:3.47pt; font-family:serif;"><span
                    >වලිපෙරණය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >සදහා</span><span
                    style="font-family:'Times New Roman';">&nbsp;2&rsquo;-6&rdquo; x 2&rsquo;-6&rdquo;&nbsp;</span><span
                    >ඩබල්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >සීල්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මෙටල්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >කවර</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >එකක්</span><span
                    style="font-family:'Times New Roman';">&nbsp;(01)&nbsp;</span><span
                    >දැමීමට</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><strong><span
                        >රු</span></strong><strong><span
                        style="font-family:'Times New Roman';">.
                        ................................</span></strong><strong><span
                        >ක්</span></strong><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >අය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >කෙරේ</span><span style="font-family:'Times New Roman';">.</span>
            </li>
        </ul>
        <p style="margin-top:0pt; margin-left:67.5pt; margin-bottom:0pt; line-height:115%;">&nbsp;</p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;"><span
                    >ඇස්තමේන්තු</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ගත</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මුදලින්</span><span
                    style="font-family:'Times New Roman';">&nbsp;50%</span><span
                    >ක</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >තැන්පතුවක්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වැඩ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ආරම්භ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >කිරීමට</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ප්</span><span
                    style="font-family:'Times New Roman';">&zwj;</span><span
                    >රථම</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >අවශ්</span><span
                    style="font-family:'Times New Roman';">&zwj;</span><span
                    >ය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වෙයි</span><span
                    style="font-family:'Times New Roman';">.&nbsp;</span><span
                    >වැඩ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >අවසන්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වූ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >පසු</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ඉතිරි</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මුදල</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ගෙවිය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >යුතුය</span><span
                    style="font-family:'Times New Roman';">.</span></li>
        </ul>
        <p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; line-height:115%;">&nbsp;</p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:200%; padding-left:7.48pt; font-family:serif;"><span
                    >ඇස්තමේන්තුව</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වලංගු</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >කාලය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >දින</span><span
                    style="font-family:'Times New Roman';">&nbsp;45</span><span
                    >කි</span><span style="font-family:'Times New Roman';">.</span>
            </li>
            <li style="margin-left:28.52pt; line-height:200%; padding-left:7.48pt; font-family:serif;"><span
                    >අපජල</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >පද්ධතියේ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ඉදිකිරීම්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >සදහා</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වසර</span><span
                    style="font-family:'Times New Roman';">&nbsp;10</span><span
                    >ක</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වගකීමක්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ඇත</span><span
                    style="font-family:'Times New Roman';">.&nbsp;</span><span
                    >ක්</span><span
                    style="font-family:'Times New Roman';">&zwj;</span><span
                    >රියාකාරීත්වය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >පවතිනුයේ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >නඩත්තුව</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මතය</span><span style="font-family:'Times New Roman';">.</span>
            </li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;"><span
                    >වල</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >කැපීමේදී</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >අපජල</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >බටය</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><strong><span
                        style="font-family:'Times New Roman';">(2&rdquo; PVC&nbsp;</span></strong><strong><span
                        >බටය</span></strong><strong><span
                        style="font-family:'Times New Roman';">)</span></strong><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මට්ටමේ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >සිට</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >අඩි</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span dir="rtl"
                    style="font-family:'Times New Roman';">........</span><span
                    >ක්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >හෝ</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ඊට</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ඉහලින්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >භූගත</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ජල</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මට්ටම</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >පවතී</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >නම්</span><span
                    style="font-family:'Times New Roman';">,&nbsp;</span><span
                    >ඇස්තමේන්තුගත</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >මිල</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ගණන්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වෙනස්</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >වනු</span><span
                    style="font-family:'Times New Roman';">&nbsp;</span><span
                    >ඇත</span><span
                    style="font-family:'Times New Roman';">.&nbsp;</span></li>
        </ul>
        <p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; line-height:115%;">&nbsp;</p>
        <p style="margin-top:12pt; margin-bottom:0pt; line-height:115%;"><span
                >කිසියම්</span> <span
                >ගැටළුවක්</span> <span
                >ඇතොත්</span> <span >ඕනෑම</span>
            <span >අවස්ථාවක</span> <span
                >පිළිතුරු</span> <span
                >සැපයීමට</span> <span >අප</span>
            <span >ඔබ</span> <span
                >වෙනුවෙන්</span> <span
                >කැපවී</span> <span >සිටින</span>
            <span >බවත්</span>, <span >ඒ</span>
            <span >සදහා</span> <span >අප</span>
            <span >හා</span> <span >සම්බන්ධ</span>
            <span >වන</span> <span >ලෙසත්</span>
            <span >දන්වමු</span>.</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:7pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:9pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt;"><span dir="rtl">....................................</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span><span
                dir="rtl">....................................</span></p>
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
                <span>අත්සන</span><span
                dir="rtl">&nbsp;</span></p>
    </div>

</body>

</html>
