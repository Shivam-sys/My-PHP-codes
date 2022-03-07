<?php
    // class person {
    //     function __construct(){
    //         echo "<h1>Person object created!";
    //     }
    // }

    // class Employee extends person{
    //     function __construct(){
    //         echo "<h1>Employee object created!";
    //     }
    // }
    // $emp = new Employee();
class BaseClass {
    function __construct() {
        print "In BaseClass constructor<br>";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        // parent::__construct();
        // print "In SubClass constructor<br>";
    }
}

class OtherSubClass extends BaseClass {
// inherits BaseClass's constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();