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
    <title>Toilet Single Job</title>
</head>

<body>
<div><br><br><br><br>
        <div style="clear:both;">
            <p style="margin-top: 0pt; margin-bottom: 0pt; text-align: left; line-height: normal; font-size: 10pt;">
                <span> අනු</span>&nbsp;<span>අංක</span>:
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
            <br><span>{{intval($invoice->toiletSingleJobInvoices[0]['quantity'])}}දෙනෙකුගේ භාවිතයට වැසිකිලි පද්ධතියට පරවැව ඉදිකිරිම සඳහා
                ඇස්තමේන්තුව.</span></u></strong><u><span dir="rtl"
                    style="font-family:'Iskoola Pota'; font-weight:bold;">.</span></u></p>
        {{-- <table cellpadding="0" cellspacing="0" 
            style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;"> --}}
            <table border="1" style="width:495.5pt; border:0.75pt solid #000000; border-collapse:collapse;">
            <tbody>
                <tr>
                    <td
                        style="width:33.95pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>අනු</span><span dir="rtl" style="font-weight:bold;">&nbsp;</span>අංකය</p>
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
                            <span>ප්</span>&zwj;<span>රමාණය</span></p>
                    </td>
                    <td
                        style="width:61.85pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p
                            style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:107%; font-size:10pt;">
                            <span>මිල</span></p>
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
                    <td>{{$invoice->toiletSingleJobInvoices[1]['width']}} x {{$invoice->toiletSingleJobInvoices[1]['height']}} x {{$invoice->toiletSingleJobInvoices[1]['length']}}
                        &nbsp;<span>ප්&zwj;රමාණයට පරවැව ඉදිකිරිම.</span></td>
                    <td><span>ගණන</span></td>
                    <td><span dir="rtl">{{$invoice->toiletSingleJobInvoices[1]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletSingleJobInvoices[1]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletSingleJobInvoices[1]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td><span>ප්&zwj;රවාහන ගාස්තු</span></td>
                    <td><span>අයිතම</span></td>
                    <td><span dir="rtl">{{$invoice->toiletSingleJobInvoices[2]['quantity']}}</span></td>
                    <td>Rs {{number_format($invoice->toiletSingleJobInvoices[2]['unit_price'],2)}}</td>
                    <td>Rs {{number_format($invoice->toiletSingleJobInvoices[2]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>{{$invoice->toiletSingleJobInvoices[3]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[3]['extra_item']== '' || $invoice->toiletSingleJobInvoices[3]['extra_item'] == 'null' ? '' : $invoice->toiletSingleJobInvoices[3]['extra_item']}}</td>
                    <td></td>
                    <td>{{$invoice->toiletSingleJobInvoices[3]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[3]['extra_item']== '' || $invoice->toiletSingleJobInvoices[3]['extra_item'] == 'null' ? '' : $invoice->toiletSingleJobInvoices[3]['quantity']}}</td>
                    <td>{{$invoice->toiletSingleJobInvoices[3]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[3]['extra_item']== '' || $invoice->toiletSingleJobInvoices[3]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletSingleJobInvoices[3]['unit_price'],2)}}</td>
                    <td>{{$invoice->toiletSingleJobInvoices[3]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[3]['extra_item']== '' || $invoice->toiletSingleJobInvoices[3]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletSingleJobInvoices[3]['total'],2)}}</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>{{$invoice->toiletSingleJobInvoices[4]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[4]['extra_item']== '' || $invoice->toiletSingleJobInvoices[4]['extra_item'] == 'null' ? '' : $invoice->toiletSingleJobInvoices[4]['extra_item']}}</td>
                    <td></td>
                    <td>{{$invoice->toiletSingleJobInvoices[4]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[4]['extra_item']== '' || $invoice->toiletSingleJobInvoices[4]['extra_item'] == 'null' ? '' : $invoice->toiletSingleJobInvoices[4]['quantity']}}</td>
                    <td>{{$invoice->toiletSingleJobInvoices[4]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[4]['extra_item']== '' || $invoice->toiletSingleJobInvoices[4]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletSingleJobInvoices[4]['unit_price'],2)}}</td>
                    <td>{{$invoice->toiletSingleJobInvoices[4]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[4]['extra_item']== '' || $invoice->toiletSingleJobInvoices[4]['extra_item'] == 'null' ? '' : 'Rs '.number_format($invoice->toiletSingleJobInvoices[4]['total'],2)}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4">මුළු එකතුව</td>
                    @php
                        $third=$invoice->toiletSingleJobInvoices[3]['total'];
                        $fourth=$invoice->toiletSingleJobInvoices[4]['total'];
                        if ($invoice->toiletSingleJobInvoices[3]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[3]['extra_item']== '' || $invoice->toiletSingleJobInvoices[3]['extra_item'] == 'null') {
                            $third=0;
                        }
                        if ($invoice->toiletSingleJobInvoices[4]['extra_item'] == '0' || $invoice->toiletSingleJobInvoices[4]['extra_item']== '' || $invoice->toiletSingleJobInvoices[4]['extra_item'] == 'null') {
                            $fourth=0;
                        }
                    @endphp
                    <td>Rs {{number_format(floatval($invoice->toiletSingleJobInvoices[1]['total'] + $invoice->toiletSingleJobInvoices[2]['total'] + $third + $fourth),2)}}</td>
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
                    </td>
                    <td
                        style="width:177.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:12pt; margin-bottom:0pt; font-size:10pt;">{{$invoice->toiletSingleJobInvoices[1]['width']}} x {{$invoice->toiletSingleJobInvoices[1]['height']}} x {{$invoice->toiletSingleJobInvoices[1]['length']}}
                            &nbsp;<span>ප්&zwj;රමාණයට පරවැව ඉදිකිරිම.</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
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
                            <span>මුළු</span><span dir="rtl" style="font-weight:bold;">&nbsp;</span>එකතුව</p>
                    </td>
                    <td
                        style="width:35.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>ගණන</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <span>අයිතම</span></p>
                    </td>
                    <td
                        style="width:38.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">&nbsp;</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">{{$invoice->toiletSingleJobInvoices[1]['quantity']}}</span></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                dir="rtl">{{$invoice->toiletSingleJobInvoices[2]['quantity']}}</span></p>
                    </td>
                    <td
                        style="width:61.85pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">{{$invoice->toiletSingleJobInvoices[1]['unit_price']}}</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">{{$invoice->toiletSingleJobInvoices[2]['unit_price']}}</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td
                        style="width:83.05pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">{{$invoice->toiletSingleJobInvoices[1]['total']}}</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">{{$invoice->toiletSingleJobInvoices[2]['total']}}</p>
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
        <p style="margin-top:0pt; margin-bottom:0pt;">
            <strong><span>බැංකු</span></strong><strong>&nbsp;</strong><strong><span>විස්තර</span></strong><strong>&nbsp;:-</strong>
        </p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ගිණුමේ</span><span style="font-family:" Times New Roman";">&nbsp;</span><span>නම</span><span
                    style="width:13.7pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:" Times New
                    Roman";">-&nbsp;</span><span>පරවැව</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ක්</span><span style="font-family:" Times New
                    Roman";">&zwj;</span><span>රමය</span><span style="font-family:" Times New Roman";">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>බැංකුවේ</span><span style="font-family:" Times New Roman";">&nbsp;</span><span>නම</span><span
                    style="width:8.95pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:" Times New
                    Roman";">-&nbsp;</span><span>සම්පත්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>බැංකුව</span><span style="font-family:" Times New Roman";">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ශාඛාව</span><span style="width:5.77pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:" Times New
                    Roman";">-&nbsp;</span><span>පිළියන්දල</span><span style="font-family:" Times New Roman";">.</span>
            </li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ගිණුම්</span><span style="font-family:" Times New Roman";">&nbsp;</span><span>අංකය</span><span
                    style="width:12.89pt; display:inline-block;">&nbsp;</span><span
                    style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:" Times New
                    Roman";">- 001910016616</span></li>
        </ul>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:107%; font-size:4pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt;">
            <strong><span>සැ</span></strong><strong>.&nbsp;</strong><strong><span>යු</span></strong><strong>&nbsp;:-</strong>
        </p>
        <ul style="margin:0pt; padding-left:0pt;" type="disc">
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ඔබ</span><span style="font-family:" Times New Roman";">&nbsp;</span><span>විසින්</span><span
                    style="font-family:" Times New Roman";">&nbsp;</span><strong><span>දිග</span></strong><strong><span
                        style="font-family:" Times New Roman";">&nbsp;= &hellip;&hellip;&hellip;
                        ,&nbsp;</span></strong><strong><span>පළල</span></strong><strong><span style="font-family:" Times
                        New Roman";">&nbsp;= &hellip;&hellip;&hellip;
                        ,&nbsp;</span></strong><strong><span>ගැඹුර</span></strong><strong><span style="font-family:"
                        Times New Roman";">&nbsp;=
                        Bathroom&nbsp;</span></strong><strong><span>බටයේ</span></strong><strong><span
                        style="font-family:" Times New Roman";">&nbsp;(4&rdquo;
                        PVC&nbsp;</span></strong><strong><span>බටයේ</span></strong><strong><span style="font-family:"
                        Times New Roman";">)&nbsp;</span></strong><strong><span>උඩ</span></strong><strong><span
                        style="font-family:" Times New
                        Roman";">&nbsp;</span></strong><strong><span>මට්ටමේ</span></strong><strong><span
                        style="font-family:" Times New
                        Roman";">&nbsp;</span></strong><strong><span>සිට</span></strong><strong><span
                        style="font-family:" Times New
                        Roman";">&nbsp;</span></strong><strong><span>අඩි</span></strong><strong><span
                        style="font-family:" Times New
                        Roman";">&nbsp;&hellip;&hellip;</span></strong><strong><span>ක්</span></strong><strong><span
                        style="font-family:" Times New Roman";">&nbsp;</span></strong><span>වන</span><span
                    style="font-family:" Times New Roman";">&nbsp;</span><span>ලෙස</span><span style="font-family:"
                    Times New Roman";">&nbsp;</span><span>වල</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>කපා</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>දිය</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>යුතුය</span><span style="font-family:" Times New Roman";">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ඔබ</span><span style="font-family:" Times New Roman";">&nbsp;</span><span>විසින්</span><span
                    style="font-family:" Times New Roman";">&nbsp;</span><span>වැලි</span><span style="font-family:"
                    Times New Roman";">&nbsp;</span><strong><span>කියුබ්</span></strong><strong><span
                        style="font-family:" Times New
                        Roman";">&nbsp;&hellip;&hellip;&nbsp;</span></strong><strong><span>ක්</span></strong><span
                    style="font-family:" Times New Roman";">&nbsp;</span><span>ලබා</span><span style="font-family:"
                    Times New Roman";">&nbsp;</span><span>දිය</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>යුතුය</span><span style="font-family:" Times New Roman";">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ඇස්තමේන්තු</span><span style="font-family:" Times New Roman";">&nbsp;</span><span>ගත</span><span
                    style="font-family:" Times New Roman";">&nbsp;</span><span>මුදලින්</span><span style="font-family:"
                    Times New Roman";">&nbsp;50%</span><span>ක</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>තැන්පතුවක්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>වැඩ</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ආරම්භ</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>කිරීමට</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ප්</span><span style="font-family:" Times New
                    Roman";">&zwj;</span><span>රථම</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>අවශ්</span><span style="font-family:" Times New
                    Roman";">&zwj;</span><span>ය</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>වෙයි</span><span style="font-family:" Times New
                    Roman";">.&nbsp;</span><span>වැඩ</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>අවසන්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>වූ</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>පසු</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ඉතිරි</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>මුදල</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ගෙවිය</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>යුතුය</span><span style="font-family:" Times New Roman";">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>ඇස්තමේන්තුව</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>වලංගු</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>කාලය</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>දින</span><span style="font-family:" Times New
                    Roman";">&nbsp;45</span><span>කි</span><span style="font-family:" Times New Roman";">.</span></li>
            <li style="margin-left:28.52pt; line-height:115%; padding-left:7.48pt; font-family:serif;">
                <span>වල</span><span style="font-family:" Times New Roman";">&nbsp;</span><span>කැපීමේදී</span><span
                    style="font-family:" Times New Roman";">&nbsp;Bathroom&nbsp;</span><span>බටය</span><span
                    style="font-family:" Times New Roman";">&nbsp;</span><strong><span style="font-family:" Times New
                        Roman";">(4&rdquo; PVC&nbsp;</span></strong><strong><span>බටය</span></strong><strong><span
                        style="font-family:" Times New Roman";">)</span></strong><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>මට්ටමේ</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>සිට</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>අඩි</span><span style="font-family:" Times New
                    Roman";">&nbsp;5</span><span>ක්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>හෝ</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ඊට</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ඉහලින්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>භූගත</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ජල</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>මට්ටම</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>පවතී</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>නම්</span><span style="font-family:" Times New
                    Roman";">,&nbsp;</span><span>ඇස්තමේන්තුගත</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>මිල</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ගණන්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>වෙනස්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>වනු</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ඇත</span><span style="font-family:" Times New
                    Roman";">.&nbsp;</span><span>එවිට</span><span style="font-family:" Times New
                    Roman";">,&nbsp;</span><span>වසර</span><span style="font-family:" Times New
                    Roman";">&nbsp;10</span><span>ක</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>පමණක්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>වගකීමක්</span><span style="font-family:" Times New
                    Roman";">&nbsp;</span><span>ලැබේ</span><span style="font-family:" Times New Roman";">.</span></li>
        </ul>
        <p style="margin-top:12pt; margin-bottom:0pt; line-height:115%;"><span>කිසියම්</span> <span>ගැටළුවක්</span>
            <span>ඇතොත්</span> <span>ඕනෑම</span> <span>අවස්ථාවක</span> <span>පිළිතුරු</span> <span>සැපයීමට</span>
            <span>අප</span> <span>ඔබ</span> <span>වෙනුවෙන්</span> <span>කැපවී</span> <span>සිටින</span>
            <span>බවත්</span>, <span>ඒ</span> <span>සදහා</span> <span>අප</span> <span>හා</span> <span>සම්බන්ධ</span>
            <span>වන</span> <span>ලෙසත්</span> <span>දන්වමු</span>.</p>
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
