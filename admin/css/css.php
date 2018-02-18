<?php
   // Written by Ed Eliot (www.ejeliot.com) - provided as-is, use at your own risk

   /****************** start of config ******************/
   $FILE_TYPE = "text/css"; // type of code we're outputting
   $CACHE_LENGTH = "31356000"; // length of time to cache output file, default approx 1 year
   $CREATE_ARCHIVE = "true"; // set to false to suppress writing of code archive, files will be merged on each request

   // files to merge
	$aFiles = array(
	'admin/css/reset.css'
	);
	$aFiles2 = array(
	'admin/css/jquery.bpeditor.css',
	'admin/css/menus.css',
	'admin/css/admin.css',
	'admin/css/responsive.css',
   'admin/css/lovelyscroll.css',
   'admin/css/colours.css',
 	'admin/css/availability.css'
	);
   /****************** end of config ********************/
   
   // this is prepended to all file / folder paths so files and archive folder should be specified relative to this
   $sDocRoot = $_SERVER['DOCUMENT_ROOT'];

   /*
      if etag parameter is present then the script is being called directly, otherwise we're including it in 
      another script with require or include. If calling directly we return code othewise we return the etag 
      representing the latest files
   */
   if (isset($_GET['version'])) {
		include "../../app/configuration.php";
	   $ARCHIVE_FOLDER = "admin/css/css_archives"; // location to store archive, don't add starting or trailing slashes
	
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
      if ($CREATE_ARCHIVE && !is_dir("$sDocRoot/".$ARCHIVE_FOLDER)) {
         mkdir("$sDocRoot/".$ARCHIVE_FOLDER);
      }

      // get code from archive folder if it exists, otherwise grab latest files, merge and save in archive folder
      if ($CREATE_ARCHIVE && file_exists("$sDocRoot/".$ARCHIVE_FOLDER."/$iETag.cache")) {
         $sCode = file_get_contents("$sDocRoot/".$ARCHIVE_FOLDER."/$iETag.cache");
      } else {
         // get and merge code

         $sCode = '';
         $aLastModifieds = array();
         foreach ($aFiles as $sFile) {
            $aLastModifieds[] = filemtime("$sDocRoot/$sFile");
            $sCode .= file_get_contents("$sDocRoot/$sFile");
         }
/*
		$file = file_get_contents('../../'.THEME_PATH.'/css/typography.css');
		$aLastModifieds[] = filemtime('../../'.THEME_PATH.'/css/typography.css');
		$file = preg_replace("/,([^\ ])/",",\n$1",$file);
		$file = preg_replace("/,([^\n])/",",\n",$file);
		$file = preg_replace("/body/",".bpe_area",$file);
		$lines = explode("\n",$file);
		foreach ($lines as $line) {
			if (trim($line)!="") {
				if (strpos($line,"}")===0 || strpos($line,"	")===0 || strpos($line," ")===0 || strpos($line,".bpe_area")===0) {
					$sCode .= $line."\n";
				} else {
					$sCode .= ".bpe_area ".$line."\n";			
				}
			}
		}
		*/
		foreach ($aFiles2 as $sFile) {
            $aLastModifieds[] = filemtime("$sDocRoot/$sFile");
            $sCode .= file_get_contents("$sDocRoot/$sFile");
         }
         // sort dates, newest first
         rsort($aLastModifieds);
         if ($CREATE_ARCHIVE) {
            if ($iETag == $aLastModifieds[0]) { // check for valid etag, we don't want invalid requests to fill up archive folder
               $oFile = fopen("$sDocRoot/".$ARCHIVE_FOLDER."/$iETag.cache", 'w');
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
	

	foreach ($aFiles2 as $sFile) {
         $aLastModifieds[] = filemtime("$sDocRoot/$sFile");
      }
//	include "../app/configuration.php";

//	$aLastModifieds[] = filemtime('../'.THEME_PATH.'/css/typography.css');

      // sort dates, newest first
      rsort($aLastModifieds);
      
      // output latest timestamp
      echo $aLastModifieds[0];
   }
?>