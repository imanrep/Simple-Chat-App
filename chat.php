<?php 
  session_start();
  include_once "api/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  $account = $_GET['account'];
  $user_id = $_GET['user_id'];
  if($account == 0){
    $user = "User 1";
  }else if ($account == 1){
    $user ="User 2";
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <div class="details">
          <span><?php echo $user ?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="user"class="user" value="<?php echo $account; ?>" hidden>
        <input type="text" name="message" class="input-field message" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="chat.js"></script>

</body>
</html>
