<?php
	session_start();
	include("config.php");
	if(isset($_POST['email']) and isset($_POST['password'])){
		if($_POST['email'] == "" or $_POST['password'] == ""){
			die("Fill all this form to log in.");
		}
		else{
			$selectUser = $db->prepare("SELECT * FROM users WHERE username = '".$_POST['email']."' AND password= '".$_POST['password']."'");
			}
			$selectUser->execute();
			if($userFound = $selectUser->fetch()){
				if($userFound['role']== 'Admin'){
				echo '<script>
                window.location.href=("pages/admin_index.php");
            	</script>';
            }
			$password = $_POST['password'];

				if(is_array($userFound)){

					$_SESSION['user']=$userFound['id'];
				}
				else{
					die("Incorrect email or password. Try again please.");
				}
			}
			else{
				die("Incorrect email or password. Try again please.");
			}
			
		}



		else{
		die("Fill this form to log in.");
	}
?>