<!--
	COPYRIGHT (c) 2017 Fabian Müller
-->
<?php


?>








<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
    <video playsinline autoplay muted loop id="bgvid">
        <source src="background.mp4" type="video/mp4">
    </video>

        <?php
            ini_set("default_charset", "iso-8859-1");
            define('DB_SERVER_CHARSET', 'UTF-8');
            //Change the $foldername value!
            //====================
            $version = "1.0.5";
            $foldername = "entry";
            $untertitel = 'Yeah ... it\'s working';
            
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            //====================
            set_error_handler("Error_Handler");
                function Error_Handler($error_number,$error_string,$error_file,$error_line){
                    /*
                    echo $error_number, "@" , $error_line , "|:|" , $error_file , "___" , $error_string;
                    die();
                    */
                }
                
                
                
                
                
                
                
                //####################LANGUAGE!#################################
                
                //en,de,sp,fr,ar,sw,tr,ru
                    $lang="sw";
                
                
                
                
                
                
                    $LangContains = "enthält";
                    $LangMatchesFor="Suchergebnisse für ";
                    $LangHits="Treffer ";

                if($lang=="de"){
                    $LangContains = "enthält";
                    $LangMatchesFor="Suchergebnisse für ";
                    $LangHits="Treffer ";
                }elseif($lang=="en"){
                    $LangContains = "contains";
                    $LangMatchesFor="Matches for ";
                    $LangHits="Hits ";  
                }elseif($lang=="fr"){
                    $LangContains = "comprend";
                    $LangMatchesFor="Résultats de recherche pour ";
                    $LangHits="Résultats ";  
                }elseif($lang=="sp"){
                    $LangContains = "incluye";
                    $LangMatchesFor="Resultados de búsqueda para " ;
                    $LangHits="Résultats";  
                }elseif($lang=="ar"){
                    $LangContains = "يشمل";
                    $LangMatchesFor="نتيجة البحث ل :" ;
                    $LangHits="معدل إصابة";  
                }elseif($lang=="sw"){
                    $LangContains = "ni pamoja na";
                    $LangMatchesFor="matokeo ya utafutaji " ;
                    $LangHits="kiwango hit";  
                }elseif($lang=="tr"){
                    $LangContains = "içerir";
                    $LangMatchesFor="için arama sonuçları " ;
                    $LangHits="isabet oranı";  
                }elseif($lang=="ru"){
                    $LangContains = "включает";
                    $LangMatchesFor="результаты поиска для " ;
                    $LangHits="скорость удара";  
                }else{
                    $LangContains = "contains";
                    $LangMatchesFor="Matches for ";
                    $LangHits="Hits ";  
                }
                //####################LANGUAGE!#################################
                
                
                
                
                
                
                
                
                
                
                
                
                
               
                $maxlist=0;
                $templist=0;
                $articel=0;
            if(isset($_GET['search'])){
                $matches= explode(" ",$_GET['search']);
                if($_GET['search']==""){
                    echo '<meta http-equiv="refresh" content="0; URL=index.php">';
                                       
                }
            }else{
                $matches=explode(" ","");
                if(isset($_GET['command'])){
                  echo  $_GET['command'];
                }
            setting(false,$version,"","",$articel,0,0);
            }
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
            
            foreach($matches as $match){
            $maxlist++;
            }
            
            
            
            
            
            
            
            
            
            
            
            
            function endsWith($haystack, $needle)
                            {
                              $length = strlen($needle);
                              if ($length == 0) {
                              return true;
                            }
                            }
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            echo '<div id="main">';
            foreach($matches as $match){
                $templist++;
            $se=false;
                if (!is_dir($foldername)){
                    echo 'The selected folder was not found! Please check the $foldername value on Line 5';
                }else{
                    $files = scandir($foldername);
                            foreach($files as $file) {
                                $coverdfile = $file;
                                $coverdfile = str_replace(".php"," ", $coverdfile);
                                $coverdfile = str_replace(".pdf"," ", $coverdfile);
                                $coverdfile = str_replace(".html"," ", $coverdfile);
                                $coverdfile = str_replace(".htm"," ", $coverdfile);
                                $coverdfile = str_replace(".zip"," ", $coverdfile);
                                $coverdfile = str_replace(".avi"," ", $coverdfile);
                                $coverdfile = str_replace(".mp3"," ", $coverdfile);
                                $coverdfile = str_replace(".jar"," ", $coverdfile);
                                $coverdfile = str_replace(".7z"," ", $coverdfile);
                                $coverdfile = str_replace(".exe"," ", $coverdfile);
                   
                               
                          
                      
                                
                              
                                
                                
                                
                                
                                
                                
                                
                                if (isset($_GET['search']) && !empty($_GET['search'])){
                                    $se = true;                                         
                                    if (strpos(strtolower($file), $match) !== false) {
                                        
                                        if(($file)==(".")){
                           continue;
                                        }elseif(($file)==("..")){
                           continue;
                                        }elseif(($file)==($file . '.info')){
                           continue;
                                        }elseif(($file)==(".htaccess")){
                           continue;
                                        }elseif(($file)==(".php")){
                           continue;
                                        }else{
                                              if (strpos(strtolower(utf8_encode($file)), '.jpg') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $coverdfile . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel"><img src="' . $foldername . "/" .  $file  . '"></div></a><br>';
                           continue;

                                              }elseif (strpos(strtolower(utf8_encode($file)), '.jpeg') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $coverdfile . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel"><img src="' . $foldername . "/" .  $file  . '"></div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.gif') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $coverdfile . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel"><img src="' . $foldername . "/" .  $file  . '"></div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.png') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $coverdfile . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel"><img src="' . $foldername . "/" .  $file  . '"></div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.mp4') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $coverdfile . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel"><center><video playsinline muted loop id="bgvids" src="' . $foldername . "/" .  $file  . '">FEHLER</video></center></center></div></a><br>';
                                                   
                                                   
                                                   
                                                   
                                                   
                           continue;
                                               }elseif (strpos(strtolower(utf8_encode($file)), '.mp4') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel"><video src="' . $foldername . "/" .  $file  . '">FEHLER</video></div></a><br>';
                           continue;
                                               }elseif (strpos(strtolower(utf8_encode($file)), '.zip') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.7z') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . 'application/zip' . '</div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.tar') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.rar') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.exe') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.iso') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.img') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                              }elseif (strpos(strtolower(utf8_encode($file)), '.jar') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                             }elseif (strpos(strtolower(utf8_encode($file)), '.jer') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                            }elseif (strpos(strtolower(utf8_encode($file)), '.avi') !== false) {
                                                  $articel=$articel + 1;
                                                  echo '<a title="' . $file . '" href="' . $foldername . "/" .
                                                   utf8_encode($file)  . '"><div id="articel">' . $coverdfile . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                           continue;
                                          }else{
                                            if(is_dir($foldername . "/" . $file)==true){
                                                /*
                                               $articel=$articel + 1;
                                                  echo '<a href="' . $foldername . "/" .
                                                   $file  . '"><div id="articel"><b><font color="#1C1C1C">' .  $file  .
                                                  "</font></b><br>" . finfo_file($finfo,$foldername . "/" .
                                                  $file ) . '<br>' . '</div></a><br>';
                                                */
                           continue;
                                            }else{
                                                
                                                $articel++;
                                                if ($articel>200){
                                                setting(true,$version,"",$_GET['search'],$articel,$templist,$templist);
                                                    die();
                                                }
                           continue;
                                            }
                                          }
                                        }
                                    }
                                    reads($file,$match,$coverdfile,$foldername,$finfo,$articel);
                                    $serched = $_GET['search'];
                                }else{
                                    $serched = "";
                                }
                            }
                  
                }  
            setting(true,$version,"",$_GET['search'],$articel,$templist,$maxlist);
          
            }
            function setting($se,$version,$untertitel,$serched,$articel,$templist,$maxlist){
                GLOBAL $LangHits;
                GLOBAL $LangMatchesFor;
                if($maxlist==$templist){
                   echo '</div>';
                    $mp = "";
                    $ptt = "";
                    if($se==false){ $mp= 'mainsearch'; $ptt="<br><br><br></div>"; }else{$mp= 'innersearch'; $ptt = "<br><br><br><br> " . $LangMatchesFor . "<b><i><font color=white>" . htmlspecialchars($serched) . '</font></i></b><br> ' . $articel . " " . $LangHits . "</div> ";}
                    if($se==false){
                        echo '<b><div id="' . $mp . '"><center><img src="turtle.png" width=100px><br><img src="turtle_logo.png">'  . '<div id="search"><form action="index.php" ><input autofocus type="text" name="search"></form></div>' . "Version " . $version . "<br>" . $untertitel . $ptt;
                    }else{
                        echo '<b><div id="' . $mp . '"><img src="turtle_logo.png">'  . '<div id="search"><form action="index.php" ><input  type="text" value="' . htmlspecialchars($serched) .  '" name="search"></form></div>' . $ptt;
                    }
                    die(); 
                }
                    
            }
            
            echo $match;
            function reads($file,$match,$coverdfile,$foldername,$finfo,$articel){
                
                GLOBAL $LangContains;
                if($file=="."){
                }elseif($file==".."){
                }elseif($file==".htaccess"){
                }elseif(strpos(strtolower($file),strtolower(".jar"))){
                }elseif(strpos(strtolower($file),strtolower(".zip"))){
                }elseif(strpos(strtolower($file),strtolower(".jer"))){
                }elseif(strpos(strtolower($file),strtolower(".7z"))){
                }elseif(strpos(strtolower($file),strtolower(".avi"))){
                }elseif(strpos(strtolower($file),strtolower(".mp3"))){
                }elseif(strpos(strtolower($file),strtolower(".mp4"))){
                }elseif(strpos(strtolower($file),strtolower(".pdf"))){
                }elseif(strpos(strtolower($file),strtolower(".exe"))){
                }elseif(strpos(strtolower($file),strtolower(".png"))){
                }elseif(is_dir($foldername . "/" . $file)==true){
                    
                }elseif(strpos(strtolower(strip_tags(file_get_contents($foldername . "/" . $file))), strtolower($match))){
                    $articel++;
                    echo '<a title="' . $file . '" href="' . $foldername . "/" .
                    utf8_encode($file)  . '"><div id="articel">' . $coverdfile . " " .  $LangContains . ' ' . $match . '<br>' . finfo_file($finfo,$foldername . "/" . $file) . '</div></a><br>';
                }
                if($articel=0){
                setting(true,'NUL',"","",$articel,0,0);
                }
                return $articel;                
            }
            
            //echo $_SERVER['SCRIPT_NAME'];
        ?>
        
        
    </body>
</html>
