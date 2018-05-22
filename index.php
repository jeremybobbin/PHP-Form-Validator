<?php

function errorMessage($input) {
  return "<div class='alert alert-danger' role='alert'>" .
         "$input is invalid!" .
         "</div>";
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<form class="mx-5 my-5 col-md-3"method="POST" action="process_form.php">
  <?php if(isset($_GET["name"])) echo errorMessage("Name"); ?>
  <div class="form-group">
    <label for="name">
      Name:
    </label>
    <input class="form-control" type="text" id="name" name="name"/>
  </div>
  <?php if(isset($_GET["email"])) echo errorMessage("Email"); ?>
  <div class="form-group">
    <label for="email">
      Email:
    </label>
    <input class="form-control" type="text" id="email" name="email"/>
  </div>
  <?php if(isset($_GET["phone"])) echo errorMessage("Phone number"); ?>
  <div class="form-group">
    <label for="phone">
      Phone Number:
    </label>
    <input class="form-control" type="text" id="phone" name="phone"/>
  </div>
  <input type="submit" value="Send">
</form>
