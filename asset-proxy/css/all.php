<?php
   // Written by Ed Eliot (www.ejeliot.com) - provided as-is, use at your own risk
	if (!defined('KEY')) {
		require_once "../../app/configuration.php";
	}
   /****************** start of config ******************/
   $FILE_TYPE = "text/css"; // type of code we're outputting
   $CACHE_LENGTH = "31356000"; // length of time to cache output file, default approx 1 year
   $CREATE_ARCHIVE = "true"; // set to false to suppress writing of code archive, files will be merged on each request
   if (is_dir(ROOT_DIR."/".THEME_PATH."/css/archives/")) {
      $ARCHIVE_FOLDER = ROOT_DIR."/".THEME_PATH."/css/archives";
   } else {
      $ARCHIVE_FOLDER = ROOT_DIR.'/sites/'.KEY.'/cache/cache/'.THEME.'_css_archives';
   }
   

	$row = 0;
	$cssFiles = array();
   if (file_exists(ROOT_DIR."/".THEME_PATH."/css/files.json")) {
      $cssFiles = file_get_contents(ROOT_DIR."/".THEME_PATH."/css/files.json");
      $cssFiles = json_decode($cssFiles,true);
   } else {
   	if (($handle = fopen(ROOT_DIR."/".THEME_PATH."/css/files.csv", "r")) !== FALSE) {
   	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
   	        $num = count($data);
   			if ($row!=0) {
   	        for ($c=0; $c < $num; $c++) {
   			
   		            $cssFiles[$c] = $data[$c];
   				
   	        }
   			}
   	        $row++;
   	    }
   	    fclose($handle);
   	}
   }

   // files to merge
	$aFiles = $cssFiles;
   /****************** end of config ********************/
   
   // this is prepended to all file / folder paths so files and archive folder should be specified relative to this
   $sDocRoot = ROOT_DIR."/".THEME_PATH.'/css';
   /*
      if etag parameter is present then the script is being called directly, otherwise we're including it in 
      another script with require or include. If calling directly we return code othewise we return the etag 
      representing the latest files
   */
   if (isset($_GET['version'])) {
      $iETag = (int)$_GET['version'];     
      $sLastModified = gmdate('D, d M Y H:i:s', $iETag).' GMT';
      
      // see if the user has an updated copy in browser cache
      if (
         (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $sLastModified) ||
         (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $iETag)
      ) {
         header("{$_SERVER['SERVER_PROTOCOL']} 304 Not Modified");
         exit;
      }

      // create a directory for storing current and archive versions
      if ($CREATE_ARCHIVE && !is_dir($ARCHIVE_FOLDER)) {
         mkdir($ARCHIVE_FOLDER);
      }

      // get code from archive folder if it exists, otherwise grab latest files, merge and save in archive folder
      if ($CREATE_ARCHIVE && file_exists($ARCHIVE_FOLDER."/$iETag.cache")) {
         $sCode = file_get_contents($ARCHIVE_FOLDER."/$iETag.cache");
      } else {
         // get and merge code

         $sCode = '';
         $aLastModifieds = array();
         foreach ($aFiles as $sFile) {
            $aLastModifieds[] = filemtime("$sDocRoot/$sFile");
            $sCode .= file_get_contents("$sDocRoot/$sFile");
         }
         // sort dates, newest first
         rsort($aLastModifieds);
         
         if ($CREATE_ARCHIVE) {
            if ($iETag == $aLastModifieds[0]) { // check for valid etag, we don't want invalid requests to fill up archive folder
               $oFile = fopen($ARCHIVE_FOLDER."/$iETag.cache", 'w');
               if (flock($oFile, LOCK_EX)) {
                  fwrite($oFile, $sCode);
                  flock($oFile, LOCK_UN);
               }
               fclose($oFile);
            } else {
               // archive file no longer exists or invalid etag specified
               header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
               exit;
            }
         }
      }
   
      // send HTTP headers to ensure aggressive caching
      header('Expires: '.gmdate('D, d M Y H:i:s', time() + $CACHE_LENGTH).' GMT'); // 1 year from now
      header('Content-Type: '.$FILE_TYPE);
      header('Content-Length: '.strlen($sCode));
      header("Last-Modified: $sLastModified");
      header("ETag: $iETag");
      header('Cache-Control: max-age='.$CACHE_LENGTH);
   
      // output merged code
      echo $sCode;
   } else {
      // get file last modified dates
      $aLastModifieds = array();
      foreach ($aFiles as $sFile) {
         $aLastModifieds[] = filemtime("$sDocRoot/$sFile");
      }
      // sort dates, newest first
      rsort($aLastModifieds);
      
      // output latest timestamp
      echo $aLastModifieds[0];
   }
?>