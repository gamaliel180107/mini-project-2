<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME; ?></title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        body {
            background-color: #f4f6f9;
            color: #333333;
            padding: 30px 20px;
            line-height: 1.5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        header {
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 20px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            color: #1a252f;
            font-size: 26px;
        }
        .badge-app {
            background-color: #2e86de;
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .card-grid {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }
        .card {
            flex: 1;
            background-color: #f8f9fa;
            border-left: 4px solid #2e86de;
            padding: 18px;
            border-radius: 6px;
        }
        .card.kritis {
            border-left-color: #ee5253;
        }
        .card h3 {
            font-size: 13px;
            color: #8395a7;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        .card .value {
            font-size: 22px;
            font-weight: bold;
            color: #222f3e;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #c8d6e5;
        }
        th {
            background-color: #222f3e;
            color: #ffffff;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
        }
        /* Highlight Kondisi Stok Kritis dan Habis */
        tr.baris-stok-kritis {
            background-color: #fff9db; /* Warna Kuning Peringatan */
        }
        tr.baris-stok-habis {
            background-color: #ffe5e5; /* Warna Merah Peringatan */
        }
        tr.baris-stok-aman:hover {
            background-color: #f1f2f6;
        }
        .status-pill {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
        }
        .status-pill.aman {
            background-color: #1dd1a1;
            color: #ffffff;
        }
        .status-pill.kritis {
            background-color: #f39c12;
            color: #ffffff;
        }
        .status-pill.habis {
            background-color: #ee5253;
            color: #ffffff;
        }
        footer {
            margin-top: 35px;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
            text-align: center;
            font-size: 13px;
            color: #8395a7;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><?= APP_NAME; ?></h1>
            <span class="badge-app">Versi <?= APP_VERSION; ?></span>
        </header>