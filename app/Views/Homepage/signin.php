<!DOCTYPE html>
<html>
  <title>Sign in</title>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      padding: 5dvh;
      }
      a {
        text-decoration:none;
        color:gray;
      }
      a:link {
        color:gray;
      }
      a:hover {
        color:green;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      border-radius: 5dvh;
      background-color: black;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>
  <body style='background-image:url("/uploads/bg.jpg");background-repeat:no-repeat;background-size:cover;background-position:absolute;background-attachment:fixed'>
  <div style='background-color:white;border-radius:3dvh;'>  
  <form action="/LoginAuth" method='post'>
      <h1>SIGN IN</h1>
      <div class="icon">
        <img src='/uploads/user.png' height='100dvh' width='100dvh' />
      </div>
      <div class="formcontainer">
      <div class="container">
        <label for="username"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="username" value="<?= set_value('username') ?>" required>
        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" value="<?= set_value('password') ?>" required>
      </div>
      <button type="submit"><strong>SIGN IN</strong></button>
      <h4><a href='/Register'>New Member? Register Here.</a></h4>
      </div>
    </form>
    </div>
    
    <div style='padding: 70px 0;'>
      <img src='/uploads/logo.png' />
    </div>
  </body>
</html>