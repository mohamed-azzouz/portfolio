<?php
	session_start();

	$serverName = "localhost:3306";
    $userName = "mohamed-azzouz";
    $passwordServer = "9Y8Z8x73";
    $nameTable = "mohamed-azzouz_forum";
    $connexion = mysqli_connect("$serverName", "$userName", "$passwordServer", "$nameTable") ;

	if (isset($_GET['id']) AND $_SESSION['login'] == "admin" ) 
	{
		$deleteMessage = "DELETE FROM  messagesthreads WHERE messagesthreads.id = '".$_GET['id']."' ";
		$queryMessage = mysqli_query($connexion, $deleteMessage) ;
		echo $deleteMessage;
		header('Location:thread.php?id=5');
	}
	else
	{
		echo "VOUS NE POUVEZ PAS SUPPRIMER DE MESSAGES <br /> VOUS N'ETES PAS ADMIN OU MODO";
	}

?>