<?php
//class User {
//  privete $name;
//  privete $role;
//
//  public function __construct($name, $role){
//    $this->name = $name;
//    $this->role = $role;
//  }
//
//  public function greetings(){
//    return $this->name . ', your role is ' . $this->role;
//  }
//
//
//  public function __destruct(){}
//}
//
//
//$user = new User('Admin', 'administrator');
//echo $user->greetings();

//class User{
//    private $name;
//    private $role;
//
//    public function __construct($name, $role)
//    {
//        $this->name = $name;
//        $this->role = $role;
//    }
//
////  SIMPLE GETTER
//    public function getName(){
//        return $this->name;
//    }
////  SIMPLE SETTER
//    public function setName($name){
//        $this->name = $name;
//    }
//
////    MAGIC GETTER
//    public function __get($property)
//{
//        if (property_exists($this, $property)){
//            return $this->$property;
//        }
//}
////    MAGIC SETTER
//    public function __set($property, $value){
//        if (property_exists($this, $property)){
//            $this->$property = $value;
//        }
//    }
//}
//
//$user = new User('Admin', 'administrator');
//$user->__set('name', 'Superuser');
//$user->__set('role', 'root');
//echo $user->__get('name');
//echo $user->__get('role');

//class User {
//    protected $name;
//    protected $role;
//
//    public function __construct($name, $role)
//    {
//        $this->name = $name;
//        $this->role = $role;
//    }
//}
//
//class Customer extends User {
//
//    public function __construct($name, $role, $balance){
//        parent::__construct($name, $role);
//        $this->balance = $balance;
//    }
//
//    public function pay($amount){
//        return $this->name . ' paid $' . $amount;
//    }
//    public function getBalance(){
//        return $this->balance;
//    }
//}
//
//$customer = new Customer('Customer', 'Newbe', 500);
//echo $customer->pay(100);
//echo $customer->getBalance();

////STATIC VARS EMD METHODS
//class User {
//    public $name;
//    public $role;
//    public static $minPassLength = 6;
//    public static function validatePass($pass){
//        if (strlen($pass) >= self::$minPassLength){
//            return true;
//        }
//        else{
//            return false;
//        }
//    }
//}
//$password = '1234567';
//if (User::validatePass($password)){
//    echo 'Pass length valid';
//}
//else{
//    echo 'Pass invalid';
//}