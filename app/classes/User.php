<?php


namespace App\classes;


class User{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'KawranBazar';

    public function login(){
        echo 'Login';
    }
    protected function logout(){
        echo 'Logout';
    }
    private function profile(){
        echo  'Profile';
    }

}