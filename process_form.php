<?php
var_dump($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

function formatPhone($phone) {
  $badPhoneChars = [ '(', ')', '-', '+'];
  $fPhone = str_replace($badPhoneChars, "", $phone);
  return $fPhone;
}

function validateName($name) {
  return strlen($name) >= 4;
}

function validateEmail($email) {
  $isValid = true;
  if (substr_count($email, '.') == 0 ||
      substr_count($email, '@') == 0) {
        $isValid = false;
      }
  return $isValid;
}

function validatePhone($phone) {
  $phone = formatPhone($phone);
  return strlen($phone) == 10 || strlen($phone) == 11;
}

function generateQueryString($nameValid, $emailValid, $phoneValid) {
  $queryString = "";
  if(!$nameValid)  $queryString .= "?name=1";
  if(!$emailValid) $queryString .= "?email=1";
  if(!$phoneValid) $queryString .= "?phone=1";
  return $queryString;
}

$nameValid  = validateName($name);
$emailValid = validateEmail($email);
$phoneValid = validatePhone($phone);

if ($nameValid && $emailValid && $phoneValid) {
  header("Location:thanks.php" . "?name=$name");
} else {
  header("Location:index.php" . generateQueryString($nameValid, $emailValid, $phoneValid));
}
?>
