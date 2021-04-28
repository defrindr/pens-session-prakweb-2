<?php

class Alert {
    public static function message(){
        $show = 0;
        $color = "success";

        if(isset($_GET['login-success'])){
            $show = 1;
            $message = "Login Berhasil";
        } else if(isset($_GET['login-error'])){
            $show = 1;
            $message = "Login gagal";
            $color = "danger";
        }  else if(isset($_GET['logged'])){
            $show = 1;
            $message = "Anda telah login";
            $color = "danger";
        } else if(isset($_GET['logout-success'])){
            $show = 1;
            $message = "Logout berhasil";
        } else if(isset($_GET['update-success'])){
            $show = 1;
            $message = "Data berhasil di ubah";
        } else if(isset($_GET['create-success'])){
            $show = 1;
            $message = "Data berhasil di buat";
        } else if(isset($_GET['delete-success'])){
            $show = 1;
            if($_GET['delete-success'] == true){
                $message = "Data berhasil di hapus";
            } else {
                $message = "Data gagal di hapus";
                $color = "danger";
            }
        } 

        if ($show):
            echo "<div class=\"alert alert-$color\">
                $message
            </div>";
        endif;
    }
}