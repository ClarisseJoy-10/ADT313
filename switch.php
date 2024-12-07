<?php
$role = "student";
switch($role){
    case 'student':
        echo "you are student. you are not allowed to acess...";
        break;
        case 'instructor':
            echo "Instructor, you have limited acess to...";
            break;
            case 'admin' :
                echo "ADMIN, YOU have full acess to";
                break;
                default: 
                echo "who are you";
                break;
}


?>