<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Activity Record Programmer</title>
    <?php
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="daily-reports.xls"');
    header('Pragma: no-cache');
    header('Expires: 0');
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .shift-section {
            background-color: #e0e0e0;
            font-weight: bold;
            text-align: center;
        }

        .report-content {
            padding-left: 20px;
        }

        .sub-content {
            margin-left: 40px;
        }

        .note {
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="header">
        DAILY ACTIVITY RECORD PROGRAMMER
    </div>

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Shift</th>
                <th>Report</th>
                <th>Remark</th>
                <th>Acknowledge</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01.08.24</td>
                <td class="shift-section">A</td>
                <td class="report-content">
                    Main Programmer: MACHRUS
                    <br>
                    1. Balancing Program:
                    <ul class="sub-content">
                        <li>KMM-X705KN MAIN DMI #147486 - NPM_3_TMP (Request Install)</li>
                        <li>KMM-X705KN MAIN DM2 #19461 - NPM_3_TMP (Request Install)</li>
                    </ul>
                    2. Info:
                    <ul class="sub-content">
                        <li>Loading program mesin NPM SMT 1 - SMT 6</li>
                        <li>Report Change model loss 1A, none</li>
                        <li>Report Downtime loss 1A</li>
                    </ul>
                    <span class="note">Sub Programmer: IFAH</span>
                    <br>
                    Loading program CM/DT
                </td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>01.08.24</td>
                <td class="shift-section">N</td>
                <td class="report-content">
                    Main Programmer: ELF
                    <br>
                    1. Balancing Program:
                    <ul class="sub-content">
                        <li>KD-TD028TEN MAIN DMI #51136 - NPM_3_TMP</li>
                        <li>KD-TD028TEN MAIN DM2 #51711 - NPM_3_TMP</li>
                    </ul>
                    2. Info:
                    <ul class="sub-content">
                        <li>Loading program mesin NPM SMT 1 - SMT 6</li>
                        <li>Report Change model loss 1A, none</li>
                    </ul>
                </td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
