<!DOCTYPE html>
<html lang="en">
<Head>
  <meta charset="UTF-8">
  <title>Aplikasi sederhana penerapan fungsi </title>
</head>
<body>
  <h1>Aplikasi sederhana penerapan fungsi</h1>

  <?php
   function hitungvolumekubus ($sisi1,$sisi2,$sisi3) {
    return ($sisi1*$sisi2*$sisi3);
   }

   $sisi1=20;
   $sisi2=30;
   $sisi3=25;

   $volume= hitungvolumekubus($sisi1,$sisi2,$sisi3);

   echo "luas segitiga dengan sisi1 $sisi1, sisi2 $sisi2 dan sisi3 $sisi3 adalah $volume";
   ?>
</body>
</html>
   