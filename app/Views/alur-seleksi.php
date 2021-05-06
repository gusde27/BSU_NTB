<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url() ?>/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <title>Alur Seleksi - Beasiswa Stimulan Unggulan</title>
</head>

<body class="bg-backBody font-roboto">
  <style>
    .dash {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1120%26quot%3b)' fill='none'%3e%3cuse xlink:href='%23SvgjsSymbol1127' x='0' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1127' x='720' y='0'%3e%3c/use%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1120'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cpath d='M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z' id='SvgjsPath1126'%3e%3c/path%3e%3cpath d='M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z' id='SvgjsPath1124'%3e%3c/path%3e%3cpath d='M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z' id='SvgjsPath1123'%3e%3c/path%3e%3cpath d='M2 -2 L-2 2z' id='SvgjsPath1121'%3e%3c/path%3e%3cpath d='M6 -6 L-6 6z' id='SvgjsPath1122'%3e%3c/path%3e%3cpath d='M30 -30 L-30 30z' id='SvgjsPath1125'%3e%3c/path%3e%3c/defs%3e%3csymbol id='SvgjsSymbol1127'%3e%3cuse xlink:href='%23SvgjsPath1121' x='30' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='30' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='30' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='30' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='30' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='30' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='30' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='30' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='30' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='30' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='90' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='90' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='90' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='90' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='90' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='90' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='90' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='90' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='90' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='90' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='150' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='150' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='150' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='150' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1126' x='150' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='150' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='150' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='150' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='150' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='150' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='210' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1126' x='210' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='210' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='210' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='210' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='210' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='210' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='210' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='210' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='210' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='270' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='270' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='270' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='270' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='270' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='270' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='270' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='270' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1126' x='270' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='270' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='330' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='330' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='330' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='330' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='330' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='330' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='330' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='330' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='330' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1126' x='330' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='390' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='390' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1126' x='390' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='390' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='390' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='390' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='390' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='390' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='390' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='390' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='450' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='450' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='450' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='450' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='450' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='450' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1124' x='450' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='450' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='450' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='450' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='510' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='510' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='510' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='510' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='510' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='510' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='510' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='510' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='510' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='510' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='570' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='570' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='570' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='570' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='570' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='570' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='570' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='570' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='570' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='570' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='630' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='630' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='630' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='630' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='630' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='630' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='630' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='630' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='630' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1126' x='630' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='690' y='30' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='690' y='90' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='690' y='150' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='690' y='210' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='690' y='270' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1123' x='690' y='330' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='690' y='390' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1122' x='690' y='450' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1125' x='690' y='510' stroke='rgba(169%2c 177%2c 185%2c 0.29)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1121' x='690' y='570' stroke='rgba(169%2c 177%2c 185%2c 0.29)'%3e%3c/use%3e%3c/symbol%3e%3c/svg%3e");
    }

    html {
      scroll-behavior: smooth;
    }
  </style>

  <!-- section 1 -->
  <div class="dash h-full">
    <header class="lg:px-32 py-10 flex items-center sm:px-20 px-10 ">
      <div class="flex items-center">
        <span class="logo border rounded-full p-4 xl:w-11 xl:h-11 lg:w-9 lg:h-9 w-7 h-7 flex items-center justify-center border-darkmain"><i class="fas fa-graduation-cap text-lightmain xl:text-2xl lg:text-lg"></i></span>
        <p class="px-3 font-black text-darkmain xl:text-2xl lg:text-lg">Beasiswa Stimulan Unggulan</p>
      </div>
      <div class="block lg:hidden ml-auto">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-darkmain border-darkmain hover:text-darkmain hover:border-darkmain">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <nav class="
      hidden ml-auto font-bold absolute flex flex-col justify-center items-center left-0 w-full bg-darkmain text-backBody top-32 p-14 
      lg:block lg:static lg:flex-row lg:bg-transparent lg:text-darkmain lg:w-auto lg:top-0 lg:p-0
      " id="nav-content">
        <a href="<?= base_url() ?>/" class="mx-3 pb-1 border-b-2 border-transparent hover:border-b-2  hover:border-darkmain">Beranda</a>
        <a href="<?= base_url() ?>/persyaratan" class="mx-3 pb-1 border-b-2 border-transparent hover:border-b-2  hover:border-darkmain">Persyaratan</a>
        <a href="<?= base_url() ?>/alur-seleksi" class="mx-3 pb-1 border-b-2 border-darkmain">Alur Seleksi</a>
        <a href="<?= base_url() ?>/ketentuan" class="mx-3 pb-1 border-b-2 border-transparent hover:border-b-2  hover:border-darkmain">Ketentuan</a>
        <a href="mailto:info@Lppntb.com" class="mx-3 border bg-darkmain px-3 py-2 rounded-lg text-backBody hover:bg-backBody hover:text-darkmain hover:border-darkmain">Email</a>
      </nav>
    </header>

    <section class="flex flex-col justify-center items-center sm:mt-32 mt-16 pb-36">
      <div class="logo border-4 rounded-full p-4 w-36 h-36 flex items-center justify-center border-darkmain mb-10"><i class="fas fa-paper-plane text-darkmain text-7xl"></i></div>
      <h1 class="text-darkmain font-black xl:text-6xl lg:text-5xl sm:text-4xl text-2xl text-center">ALUR SELEKSI</h1>
      <h1 class="text-darkmain font-black xl:text-6xl lg:text-5xl sm:text-4xl text-2xl text-center">BEASISWA STIMULAN UNGGULAN</h1>
      <p class="text-lightmain xl:w-5/12 text-center py-5 px-2 font-medium md:text-lg text-sm">
        Berikut merupakan alur seleksi yang akan dilewati oleh calon penerima beasiswa
        dalam mendaftar menjadi penerima Beasiswa Stimulan Unggulan
      </p>
      <a href="#persyaratan" class="bg-lightmain px-14 py-2 rounded-full text-backBody font-medium my-10 transform focus:outline-none hover:bg-backBody hover:text-darkmain border border-transparent hover:border-darkmain hover:scale-105 transition hover:shadow-xl"> Lihat </a>
    </section>
  </div>

  <!-- Section 2 -->
  <section class="bg-darkmain h-full" id="persyaratan">
    <div class="lg:pt-28 lg:pb-16 pt-16 flex justify-center items-center">
      <i class="fas fa-paper-plane text-backBody mx-2 lg:text-6xl text-6xl "></i>
      <h1 class="text-backBody mx-2 text-3xl md:text-5xl font-medium"> Alur Seleksi</h1>
    </div>
    <div class="flex lg:flex-row justify-center lg:py-5 py-0 flex-col items-start">
      <div class="shadow-md bg-lightmain lg:w-80 w-9/12 rounded-xl p-5 mx-6 my-6 transform transition-transform hover:scale-105">
        <div class="title font-normal text-backBody text-lg leading-6">Beasiswa Stimulan Unggulan nantinya akan di sosilisasikan kepada masyarakat NTB sebelum dibukanya pendaftaran. Hal ini untuk memberikan pemahaman kepada masyarakat mengenai jenis Beasiswa yang dibuka berikut juga dengan mekanisme, alur pendaftaran dan lain-lain.</div>
        <div class="bar bg-gray-300 h-1 my-3"></div>
        <span class="flex justify-between items-center text-backBody font-bold text-xl"> Sosialisasi
          <p class="border rounded-full flex justify-center items-center bg-darkmain w-7 h-7">1</p>
        </span>
      </div>
      <div class="shadow-md bg-lightmain lg:w-80 w-9/12 rounded-xl p-5 mx-6 my-6 transform transition-transform hover:scale-105">
        <div class="title font-normal text-backBody text-lg leading-6">Calon Awardee mendaftarkan diri melalu website resmi Beasiswa NTB Dalam Negeri, maupun melalui link yang sudah disediakan langsung oleh tim Beasiswa NTB Dalam Negeri.</div>
        <div class="bar bg-gray-300 h-1 my-3"></div>
        <span class="flex justify-between items-center text-backBody font-bold text-xl"> Pendaftaran
          <p class="border rounded-full flex justify-center items-center bg-darkmain w-7 h-7">2</p>
        </span>
      </div>
      <div class="shadow-md bg-lightmain lg:w-80 w-9/12 rounded-xl p-5 mx-6 my-6 transform transition-transform hover:scale-105">
        <div class="title font-normal text-backBody text-lg leading-6">Setiap berkas yang diupload pada form pendaftaran diseleksi dan divalidasi. Calon awardee yang lulus seleksi berkas diumumkan melalui laman resmi Beasiswa NTB dalam Negeri untuk melanjutkan ke tahap Seleksi Wawancara.</div>
        <div class="bar bg-gray-300 h-1 my-3"></div>
        <span class="flex justify-between items-center text-backBody font-bold text-xl"> Seleksi Berkas
          <p class="border rounded-full flex justify-center items-center bg-darkmain w-7 h-7">3</p>
        </span>
      </div>
    </div>
    <div class="flex lg:flex-row justify-center lg:py-5 py-0 flex-col items-center lg:pb-24">
      <div class="shadow-md bg-lightmain lg:w-80 w-9/12 rounded-xl p-5 mx-6 my-6 transform transition-transform hover:scale-105">
        <div class="title font-normal text-backBody text-lg leading-6">Selanjutnya Calon Awardee akan melewati tahap seleksi Wawancara yang menjadi tahap terakhir sebelum Calon Awardee dinyatakan lulus sebagai Awardee Beasiswa NTB Dalam Negeri</div>
        <div class="bar bg-gray-300 h-1 my-3"></div>
        <span class="flex justify-between items-center text-backBody font-bold text-xl"> Seleksi Wawancara
          <p class="border rounded-full flex justify-center items-center bg-darkmain w-7 h-7">4</p>
        </span>
      </div>
      <div class="shadow-md bg-lightmain lg:w-80 w-9/12 rounded-xl p-5 mx-6 my-6 transform transition-transform hover:scale-105">
        <div class="title font-normal text-backBody text-lg leading-6">Calon awardee yang lulus seleksi wawancara diumumkan melalui laman resmi Beasiwa NTB Dalam Negeri dan dinyatakan sebagai Awardee Beasiswa NTB Dalam Negeri.</div>
        <div class="bar bg-gray-300 h-1 my-3"></div>
        <span class="flex justify-between items-center text-backBody font-bold text-xl"> Pengumuman
          <p class="border rounded-full flex justify-center items-center bg-darkmain w-7 h-7">5</p>
        </span>
      </div>
    </div>
  </section>
  <footer class="flex justify-between items-center lg:px-10 py-6 flex-col px-2 text-darkmain">
    <div class="flex items-center font-bold py-1">
      &copy; 2021 All rights reserved.
    </div>
    <div class="flex justify-center items-center py-1">
      <div class="mx-2">
        <a href="#" class="flex items-center">
          <i class="fab fa-instagram text-xl"></i> <span class="lg:text-sm text-xs"> &nbsp;BeasiswaNTBDN</span>
        </a>
      </div>
      <div class="mx-2">
        <a href="#" class="flex items-center">
          <i class="fab fa-facebook text-xl"></i><span class="lg:text-sm text-xs"> &nbsp;Beasiswa NTB Dalam Negeri</span>
        </a>
      </div>
    </div>
  </footer>

  <script>
    document.getElementById('nav-toggle').onclick = function() {
      document.getElementById("nav-content").classList.toggle("hidden");
    }
  </script>
</body>

</html>