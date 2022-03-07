<?php
    class Boss{
        private $approve;
        function __construct(){
            echo "<h3>Form recieved by Boss.";
            $this->approval();
        }
        public function approval(){
            $approve = TRUE;
            echo "<h3>Form Approved by Boss.";
        }
    }
    class Clerk extends Boss{
        private $recieved, $verified;
        function __construct(){
            $this->recieved = TRUE;
            echo "<h3>Form recieved by clerk.";
            $this->verify();
        }
        function verify(){
            $this->verified = TRUE;
            echo "<h3>Form verified by clerk.";
        }
    }

    $form1 = new Clerk();
   