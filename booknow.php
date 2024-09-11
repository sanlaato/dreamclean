<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = filter_input(INPUT_POST, "full_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $contactnumber = filter_input(INPUT_POST, "contact_number", FILTER_SANITIZE_SPECIAL_CHARS);
        $emailaddress = filter_input(INPUT_POST, "email_address", FILTER_SANITIZE_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
        $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);

        mail($data[0]["email"], $fullname, $message);

        header("Location: index.php");
    }
?>