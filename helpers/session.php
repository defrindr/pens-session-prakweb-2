<?php

class Session {
    private $data;

    public function __construct()
    {
        if(session_id() == ''){
            //session has not started
            session_start();
        }
        $this->data = $_SESSION;
    }

    public function get($name){
        if($this->has($name)) return $this->data[$name];
        return null;
    }
    
    public function has($name){
        return isset($this->data[$name]);
    }
    
    public function set($key, $name){
        $this->data[$key] = $name;
        $this->updateFromData();
    }

    public function delete($key){
        unset($_SESSION[$key]);
        $this->updateFromSession();
    }

    private function updateFromData(){
        foreach($this->data as $key => $val){
            $_SESSION[$key] = $val;
        }
    }

    private function updateFromSession(){
        foreach($_SESSION as $key => $val){
            $this->data[$key] = $val;
        }
    }
}