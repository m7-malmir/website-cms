<?php
function URL($key = null){
    
     $arr=explode("/",trim($_GET['url'],"/"));
     if(!is_numeric($key))
     return $arr;

    return $arr[$key] ?? '';
}
echo '<pre>';
print_r(URL());
echo '</pre>';
echo 'page name is:' .URL(0);
?>