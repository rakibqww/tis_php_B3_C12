<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User{

    public $firstNumber = 10;
    protected $secondNumber = 20;
    private $operator = 30;
    public $result;
    public $user;

    public function index(){
       $this->user = new User();
      echo $this->user->city;
    }

    protected function one(){
        echo 'Hello World One';
    } 

    private function two(){
        echo 'Hello World Two';
    }
}
