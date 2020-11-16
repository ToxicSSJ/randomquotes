<html>
   <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         h1 { font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; } h3 { font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } p { font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px; }
      </style>
   </head>
   <body>
      <p><i class="fa fa-server"></i> Contenedor: <strong><?php echo $ip; ?></strong></p>
      <p><i class="fa fa-image"></i> Tu imagen al azar: <strong><?php echo $file; ?></strong></p>
      <p><i class="fa fa-calendar"></i> Fecha de generación: <strong><?php echo date('l jS \of F Y h:i:s A'); ?></strong></p>
      <img src="<?php echo $url; ?>"/>
   </body>
</html>