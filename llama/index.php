<!-- 
                 V
                /'>>>
               /*/
              / /
             /*/
            / /
    -------/*/
 --/  *  * */
  /* * *  */    Powered by Llama Studio Works 
  -  --- -/
   H    H
   H    H
   --   --
-->
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Leticia Rss</title>
    <link rel="stylesheet" type="text/css" href="lightbox/css/jquery.lightbox-0.5.css" />
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="lightbox/js/jquery.lightbox-0.5.pack.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
<div id="container">
  <div id="heading">
  <h1>Llamas</h1>
  </div>
  <div id="gallery">
<?php 
  $directory = 'llamas';
  $allowed_types=array('jpg','jpeg','gif','png');
  $file_parts=array();
  $ext='';
  $title='';
  $i=0;
  $dir_handle = @opendir($directory) or die("There is an error with your image directory!");
  while ($file = readdir($dir_handle)) 
  {
    if($file=='.' || $file == '..') continue;
    $file_parts = explode('.',$file);
    $ext = strtolower(array_pop($file_parts));
    $title = implode('.',$file_parts);
    $title = htmlspecialchars($title);
    $nomargin='';
    
    if(in_array($ext,$allowed_types))
    {
      if(($i+1)%4==0) $nomargin='nomargin'; 
      echo '
      <div class="pic '.$nomargin.'" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
      <a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
      </div>';
      
      $i++;
    }
  }
  closedir($dir_handle);
?>
  <div class="clear"></div>
  </div>
</div>
<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-43684209-1', 'nihas.com.br'); ga('send', 'pageview'); </script>
</body>
</html>
