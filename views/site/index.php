<?php
$print = "Anda belum login";
if($this->session->has('user')){
    $user = $this->session->get('user');
    $print = "Hallo ". $user;
} 

echo $print;
?>

