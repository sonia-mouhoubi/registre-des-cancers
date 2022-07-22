<?php 
function messages() {
    
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    $_SESSION['message'] = "";
}

function messagesPasswordProfil() {
    
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    $_SESSION['message'] = "";

    if(isset($_SESSION['messagePassword'])) {
        echo $_SESSION['messagePassword'];
    }
    $_SESSION['messagePassword'] = "";
}

?>