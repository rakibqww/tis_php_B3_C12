<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User{ //Child extends Parent=> Inheritance
//=>encapsulation
    public $firstNumber ;
    protected $secondNumber ;
    private $operator ;
    public $result;
    public $user;

    public function __construct($data)    {
      //  echo is_array($data) ? 'Data is Array' : 'Data is single Variable';
        // '?' => if , ':' else => Ternary operation

//        $this->firstNumber = 10;
//        $this->secondNumber = 20;
//        $this->operator = '+';

        $this->firstNumber = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator = $data['operator'];

    }


    public function index(){
//       $this->user = new User();
//      echo $this->user->country; // protected Property
      //echo $this->profile(); Private Property

//    public function index(){   encapsulation
//        $this->user = new User();
//        $this->user->
//     echo  $this->add();
//     echo  $this->sub();
//     echo  $this->multiplication();
//     echo  $this->division();

        switch ($this->operator) {
            case '+':
                $this->result = $this->add();
                //echo/return $this->add();
                break;
            case '-' :
                $this->result = $this-> sub();
                break;
            case '*' :
                $this->result = $this-> multiplication();
                break;
            case '/' :
                $this->result = $this-> division();
                break;
            case '%' :
                $this->result = $this-> remainder();
                break;
        }
       return $this->result;
    }

    protected function add(){
      return  $this->firstNumber + $this->secondNumber;
    }
    protected function sub(){
        return $this->firstNumber - $this->secondNumber;
    }
    protected function multiplication(){
        return $this->firstNumber * $this->secondNumber;
    }
    protected function division(){
        return $this->firstNumber / $this->secondNumber;
    }
    protected function remainder(){
        return $this->firstNumber % $this->secondNumber;
    }

}
