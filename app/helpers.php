<?php

function setActivo($ruta){
    return request()->routeIs($ruta) ? 'active' : '';

}

?>