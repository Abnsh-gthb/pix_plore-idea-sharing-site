<?php

function dim_algo($width,$height){
    if($width==0||$height==0){
        return "tall";
    }
if(($height/$width)<1){
if(($height/$width)<.5){
    return "small";
}
else{
    return "tall";
}
}
elseif(($height/$width)>1.55){
    return "tall";
}
else{
    if($width>=1200){
        return "big";
    }
    else{
        return "wide";
    }
}
}




?>