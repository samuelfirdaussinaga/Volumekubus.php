<!DOCTYPE html>
<html lang="en">
<Head>
  <meta charset="UTF-8">
  <title>Mencari Volume Kubus </title>
</head>
<body>
  <h1>Mencari Volume Kubus</h1>

  <?php
   function hitungvolumekubus ($sisi1,$sisi2,$sisi3) {
    return ($sisi1*$sisi2*$sisi3);
    
   }

   $sisi1=20;
   $sisi2=30;
   $sisi3=25;

   $volume= hitungvolumekubus($sisi1,$sisi2,$sisi3);

   echo "Volume kubus dengan sisi1 $sisi1, sisi2 $sisi2 dan sisi3 $sisi3 adalah $volume";
   ?>
</body>
</html>
   
