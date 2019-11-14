<html>
<head>
	<meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<style>
		*{
        	margin: 0;
        	padding: 0;
        	text-decoration: none;
        	font-family: montserrat;
        	box-sizing: border-box;
    	}
    	body{
      		min-height: 100vh;
        	background-image: linear-gradient(120deg,#34495e,#7f8c8d);
    	}
    	.login-form{
        width: 360px;
        height: 580px;
        padding: 80px 40px;
        border-radius: 10px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
    .login-form h1{
        text-align: center;
        margin-bottom: 60px;
    }
    .login-form h3{
    	text-align: center;
        margin-bottom: 60px;
    }
    i{
    	font-size: 16px;
    }
	</style>
	
<div class="login-form">
<?php
	$nome= $_POST['nome'];
	$data= $_POST['data'];
	$email= $_POST['email'];
	
	echo"<h1>Cadastro efetuado com sucesso!</h1>";
	echo"<i><br>Seu nome: ".$nome;
	echo"<br>Sua data de nascimento: ".$data;
	echo"<br>Seu e-mail: ".$email."<i>";
	
?>
</div>

</head>
<body>
</body>
</html>