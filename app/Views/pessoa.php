<h1><?=$title?></h1>

<?php
    foreach($pessoas as $pessoa_item){
        echo $pessoa_item['nome']."<br/>";
    }