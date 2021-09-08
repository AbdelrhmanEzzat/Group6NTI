<?php

function validate($input,$flag){
    $status = true;

    switch ($flag) {
        case 1: // name
            # code...
            if (!is_string($input)){
                $status=false;
            }
            break;

        case 2: // name
            # code...
            if (empty($input)){
                $status=false;
            }
            break;

        case 3: // url
            # code...
            if (!preg_match('/^[a-zA-Z\s]*$/',$input)){
                $status=false;
            }
            break;

        case 4: // url
            # code...
            if (!preg_match("/https?:\/\/(www\.)?linkedin\.com\/in\/([^\/]*)/",$input)){
                $status=false;
            }
            break;

        case 5:
            # code...
            if (!filter_var($input,FILTER_VALIDATE_EMAIL)){

                $status=false;
            }
            break;
        case 6:
            # code...
            if (strlen($input) < 6 ){
                $status=false; 
            }
            break;

        case 7:
            # code...
            if (strlen($input) < 10 ){
                $status=false; 
            }
            break;


        case 8:
            # code...
            $alloedext = ["jpeg","jpg","png"];
            $extArray = explode('/',$input);
            if (!in_array($extArray[1],$alloedext)){
                $status=false;
            }
            break;

        }
        
            return $status;
    
}


 function CleanInputs($input)
{
    # code...
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}


?>
