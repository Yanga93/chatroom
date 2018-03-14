<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LetsMeet</title>

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="index.css">
  </head>
  <body>
<div class="container-fluid">
  <div class="well text-centre" id="chatBox">
    <h3>LetsMeet Live Chat</h3>
    <p>
      <span style="color: red">John: </span>
      <span style="color: blue">Hello World!! </span>
      <span style="float: right">11:20 PM</span>

    </p>
      <form id="myChatForm">

          <input type="text" id="user_name" placeholder="enter username"><br><br>
          <textarea name="message" id="message" rows="30" cols="2"></textarea>
          <button class="btn btn-success btn-lg">Send Message</button>

      </form>


  </div>
</div>

  </body>
</html>
