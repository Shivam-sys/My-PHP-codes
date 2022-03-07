<?php
    $url1=$_SERVER['REQUEST_URI'];
    // header("Refresh: 2; URL=$url1");
?>
<?php
    function showData($name,$adhar,$contact,$age,$country="India",$passport=null,$criminalRec=FALSE){
        echo "<font face = 'poppins'>";
        echo "Name: $name<br>";
        echo "Adhar no.: $adhar<br>";
        echo "Age.: $age<br>";
        echo "Contact: $contact<br>";
        echo "Country: $country<br>";
        echo "Person is ".(($age>=18)? "an Adult":"a Minor");
        echo (($country!="India")? "<br>Passport num : $passport" : null);
        echo "<br>Criminal record: ".(($criminalRec != FALSE)? "Criminal rec available":"No criminal record");
    }
    showData("Shivam","449333","8493093","17","India","pass4855",TRUE);
?>