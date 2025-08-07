<?php

// connection to the db config.php

$remoteip = $_SERVER['REMOTE_ADDR'];

    //// IP address code starts ///////////////////////////////////////////////////////////////////
    function getRealUserIp(){
        switch(true){
        case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
        }
    }
    //// IP address code Ends /////////////////////////////////////////////////////////////////////////

    $ipaddress = getRealUserIp();

    function getFineName() {
        $filename = basename($_SERVER['PHP_SELF']);
        $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);

        if ($filenameWithoutExtension == 'index') {
            return 'Home';

        } elseif ($filenameWithoutExtension == 'login') {
            return 'Login';

        } elseif ($filenameWithoutExtension == 'signup') {
            return 'Signup';

        } elseif ($filenameWithoutExtension == 'onboarding') {
            return 'Onboarding';

        } elseif ($filenameWithoutExtension == 'blog-cat') {
            return 'Blog Categories';

        } elseif ($filenameWithoutExtension == 'terms-condition') {
            return 'Terms & Condition';

        } elseif ($filenameWithoutExtension == 'privacy-policy') {
            return 'Privacy Policy';

        } elseif ($filenameWithoutExtension == 'faq') {
            return 'Frequently Asked Question';

        } elseif ($filenameWithoutExtension == 'profile') {
            return 'User Profile Details';

        } elseif ($filenameWithoutExtension == 'courses') {
            return 'Courses';
           
        } elseif ($filenameWithoutExtension == 'courses-details') {
            return 'Courses Details';

        }elseif ($filenameWithoutExtension == 'blog-tag') {
            return 'Blog Tags';

        }elseif ($filenameWithoutExtension == 'blog-details') {
            return 'Blog Details';
            
        }elseif ($filenameWithoutExtension == 'event-details') {
            return 'Event Details';
        
        }elseif ($filenameWithoutExtension == 'event') {
            return 'Events';

        } elseif ($filenameWithoutExtension == 'profile') {
            return 'User Profile';

        } elseif ($filenameWithoutExtension == 'settings') {
            return 'Settings';

        } elseif ($filenameWithoutExtension == '500') {
            return '500 Sever Error';

        } elseif ($filenameWithoutExtension == '404') {
            return '404 : ERROR';

        } elseif ($filenameWithoutExtension == '403') {
            return '403 Access Denied';

        } elseif ($filenameWithoutExtension == '419.php') {
            return '419 Session Expired';

        } else {
            return ucfirst($filenameWithoutExtension);
        }
    }

    $title = getFineName();

?>
