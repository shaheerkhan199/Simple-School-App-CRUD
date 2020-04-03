<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>


  
  
    <a href="#myPopup" data-rel="popup">Show Popup Form</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
      <form method="post" action="/action_page_post.php">
        <div>
          <h3>Login information</h3>
     
          <input type="text" name="user" id="usrnm" placeholder="Username">
          
          <input type="password" name="passw" id="pswd" placeholder="Password">
          <input type="submit" value="Log in">
        </div>
      </form>
    </div>



</body>
</html>