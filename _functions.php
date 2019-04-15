<?php
  /*  FIND THE INDEX VALUE WITHIN A MULTIDIMENSIONAL ARRAY  */
  /*  echo recursiveArraySearch($sitePages, $pageAry[0], "id");  */
  function recursiveArraySearch($haystack, $needle, $index = null) {
    $aIt = new RecursiveArrayIterator($haystack);
    $it  = new RecursiveIteratorIterator($aIt);
    while($it->valid()) {
      if (((isset($index) AND ($it->key() == $index)) OR (!isset($index))) AND ($it->current() == $needle)) {
        return $aIt->key();
      }
      $it->next();
    }
    return false;
  }


  /*  RETURN THE QUERY VALUE OF A SPECIFIC GET VALUE  */
  function getUrlQueryValue($urlStringName, $returnIfNotSet) {
    if (isset($_GET[$urlStringName]) && $_GET[$urlStringName] != "") {
      return $_GET[$urlStringName];
    } else {
      return $returnIfNotSet;
    }
  }


  /*  RECURSIVE FUNCTION TO DUMP THE MASTER LIST  */
  function dump($value,$level=0) {
    if ($level==-1) {
      $trans[' ']='&there4;';
      $trans["\t"]='&rArr;';
      $trans["\n"]='&para;;';
      $trans["\r"]='&lArr;';
      $trans["\0"]='&oplus;';
      return strtr(htmlspecialchars($value),$trans);
    }
    if ($level==0) echo '<pre>';
    $type= gettype($value);
    echo $type;
    if ($type=='string') {
      echo '('.strlen($value).')';
      $value= dump($value,-1);
    }
    elseif ($type=='boolean') $value= ($value?'true':'false');
    elseif ($type=='object') {
      $props= get_class_vars(get_class($value));
      echo '('.count($props).') <u>'.get_class($value).'</u>';
      foreach($props as $key=>$val) {
        echo "\n".str_repeat("\t",$level+1).$key.' => ';
        dump($value->$key,$level+1);
      }
      $value= '';
    }
    elseif ($type=='array') {
      echo '('.count($value).')';
      foreach($value as $key=>$val) {
        echo "\n".str_repeat("\t",$level+1).dump($key,-1).' => ';
        dump($val,$level+1);
      }
      $value= '';
    }
    echo " <b>$value</b>";
    if ($level==0) echo '</pre>';
  }


  /*  I DON'T USE THIS ANYMORE, CORRECT?  */
  function curPageURL($encoded, $noQuery) {
/*
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
*/
      if ($noQuery == true) {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"];
      } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
      }
/*     } */
    if ($encoded == true) {
      return rawurlencode($pageURL);
    } else {
      return $pageURL;
    }
  }
?>
