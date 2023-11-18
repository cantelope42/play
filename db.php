<?
  $db_user="user";
  $db_pass="";
  $db_host="localhost";
  $db="videodemos";
  $demoSandbox='demo.cantelope.org';
  $maxResultsPerPage = 6;
  
  
  $local = false;
  if($local){
    $baseURL='local.audiocloud.cantelope.org';
    $baseAssetsURL = 'http://local.assets.whitehotrobot.com';
  }else{
    $baseURL='audiocloud.cantelope.org';
    $baseAssetsURL = 'https://assets.cantelope.org';
  }
  
  $baseFullURL= ($local ? 'http://' : 'https://') . $baseURL;
  $link = mysqli_connect($db_host, $db_user, $db_pass, $db);

?>

