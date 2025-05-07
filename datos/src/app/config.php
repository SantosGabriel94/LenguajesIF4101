<?php
$container->set('config_bd',function(){
    return(object)[
        "host"=>"db",
        "db"=> "taller",
        "usr"=> "root",
        "passw"=>"1234567",
        "charset"=> "utf8mb4"

    ];
}
);