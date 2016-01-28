<?php
function GetListFiles($folder,&$all_files){
    $fp=opendir($folder);
    while($cv_file=readdir($fp)) {
        if(is_file($folder."/".$cv_file)) {
            $all_files[]=$folder."/".$cv_file;
        }
    elseif($cv_file!="." && $cv_file!=".." && is_dir($folder."/".$cv_file)){
            GetListFiles($folder."/".$cv_file,$all_files);
        }
    }
    closedir($fp);
}
$all_files = array();
GetListFiles("/home/alina/papka",$all_files);
print_r($all_files);

echo $all_files[7] . filesize($all_files[7]) . "\n";
$a = file_get_contents($all_files[17]);
echo $a . "\n";
/*
foreach($all_files ass$value){
        echo filesize($all_files[$i]) . $value . "\n";
        $i++
        }*/

for($i = 0, $b = count($all_files); $i<$b ; $i++) {
    $razm = array();
      $razm = filesize($all_files[$i]);
    $r = array();
    foreach($razm as $k => $v) {
            if(isset($r[$v])){
               $r[$v]++ ;
               if($r[$v]>=2)
                  echo 'Files one size' . $v ;
            }
            else $r[$v]=1;
    }
}

        

?>