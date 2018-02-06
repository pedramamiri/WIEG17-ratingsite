<?php 
function sortMyArray($list){
    sort($list);
    return $list;
}
function showDetaile($detail){
    foreach($detail as $key => $value){
        echo "    <a href='./details.php?id=details&key=$key'>$key</a><br/>";
        
    }
}
?>