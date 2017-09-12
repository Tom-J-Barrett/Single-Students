<?php
    function getCardPattern($type){

        switch (cardType) {
        case 'visa':
            return "/^4[0-9]{12}(?:[0-9]{3})?$/";

        case 'mastercard':
            return "/^5[1-5][0-9]{14}$/";

        case 'laser':
            return "/^(6304|6706|6709|6771)[0-9]{12,15}$/";

        case 'maestro':
            return "/^(5018|5020|5038|6304|6759|6761|6763)[0-9]{8,15}$/";

        }
    }

    function chkCardDate($month, $year){
        $currentMonth = date("m"); //Month in MM
        $currentYear = date("Y") % 2000; //Returns the years as YY rather than YYYY
        if (($year <= $currentYear)) {
            return false;
        }
        else if (($month <= $currentMonth) && ($year <= $currentYear)) {
            return false;
        }
        else{
            return true;
        }

    }

    function correctDate($day, $month, $year){
         $leapYear = false;

        //Number of days for each month
         $ListofDays = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

        if ($month == 1 || $month > 2) {
            if ($day > $ListofDays[$month - 1]) {
                return false;
            }
        }
        //Checking in the case of a leapyear
        if ($month == 2) {
            if (($year % 4 == 0 && ($year % 100 !== 0)) || ($year % 400 == 0)) {
                $leapYear = true;
            }

            if (($leapYear == false) && ($day >= 29)) {
                return false;
            }

            if (($leapYear == true) && ($day > 29)) {
                return false;
            }

        }
        if ($year > (date("Y")-18))
            if ($month > date("m") && $day > date("d"))
                return false;

        return true;
    }

?>
