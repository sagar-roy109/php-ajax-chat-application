<?php 

session_start();

require_once 'functions.php';
require_once 'server/db.php';

if (!user_login()){
  header('location: index.php');
  die();
}

$db = new DB;
$chat = $db->connect->query("SELECT * FROM chats ");
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
	<section class="chatbox">
		<section class="chat-window">
			<article class="msg-container msg-remote" id="msg-0">
      
					<div class="flr">
						<div class="messages">

            <?php  while($msg = $chat->fetch_object() ) : ?>

              <p style="color: #ff2bff;"><?php echo $msg->user_email; ?></p>
							<p class="msg" id="msg-0">
              <?php echo $msg->message; ?>
							</p>
              <?php
                endwhile
              ?>
              
						</div>
						
					</div>
				</div>
			</article>
		</section>
		<form class="chat-input">
			<input type="text" autocomplete="on" placeholder="Type a message" name="message" />
			<button>
          <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="rgba(0,0,0,.38)" d="M17,12L12,17V14H8V10H12V7L17,12M21,16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V7.5C3,7.12 3.21,6.79 3.53,6.62L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.79,6.79 21,7.12 21,7.5V16.5M12,4.15L5,8.09V15.91L12,19.85L19,15.91V8.09L12,4.15Z" /></svg>
       </button>
		</form>
	</section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script  src="js/custom.js"></script>
</body>
</html>