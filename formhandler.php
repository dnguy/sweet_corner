<?php 
var_dump($_POST);
foreach($_POST as $k => $v){
echo "<pre> $k : $_POST[$k] </pre> <br>";
	switch ($k) {
    case "name":
        print("checking name : $_POST[name] <br>");
        if(preg_match( "/^[a-zA-Z]{2,}$/ " ,  $_POST['name']) != 1)
    {
    	print('they do not match');
    };
        break;
    case "email":
        print("checking email : $_POST[email] <br>");
        if(preg_match( "/^[^@]+@[^@]+\.[^@]+$/ " ,  $_POST['email']) != 1)
    {
    	print('they do not match');
    };
        break;
    case "phone":
        print("checking phone : $_POST[phone] <br>");
        if(preg_match( "/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/ ",  $_POST['phone']) != 1)
    {
    	print('they do not match');
    };
        break;
    case "subject":
        print("checking subject : $_POST[subject] <br>");
        if(preg_match( "/^[a-zA-Z]{2,}$/ "  ,  $_POST['subject']) != 1)
    {
    	print('they do not match');
    };
        break;
    case "message":
        print("checking message : $_POST[message]");
        break;
}
};


?>