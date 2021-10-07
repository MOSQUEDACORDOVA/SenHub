<?php  
    exec("OSQL -L", $log);
    foreach($log as $out) {
        if($out!="Servers:" && $out!=""){
            echo '<option value="'.$out.'">'.$out.'</option>';
        }
    }
?>  