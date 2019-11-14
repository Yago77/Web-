<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
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
        background: #f1f1f1;
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

    .txtb{
        border-bottom: 2px solid #adadad;
        position: relative;
        margin: 30px 0;
    }
    .txtb input{
        font-size: 15px;
        color: #333;
        border: none;
        width: 100%;
        outline: none;
        background: none;
        padding: 0 5px;
        height: 40px;
    }
    .txtb span::before{
        content: attr(data-placeholder);
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        z-index: -1;
        transition: .5s;
    }
    .txtb span::after{
        content: '';
        position: absolute;
        width: 0%;
        height: 2px;
        background: linear-gradient(120deg,#34495e,#7f8c8d);
        transition: .5s;
        margin-left: -280px;
        margin-top: 40px;
    }

    .focus + span::before{
        top: -5px;
    }
    .focus + span::after{
        width: 100%;
    }

    .logbtn{
        display: block;
        width: 100%;
        height: 50px;
        border: none;
        background: linear-gradient(120deg,#34495e,#7f8c8d);
        background-size: 200%;
        color: #fff;
        outline: none;
        cursor: pointer;
        transition: .5s;
    }

    .logbtn:hover{
        background-position: right;
    }

    .bottom-text{
        margin-top: 60px;
        text-align: center;
        font-size: 13px;
    }
</style>
</head>
<body>

	<main>
        <form id="cadast" action="formulario.php" method="POST" class="login-form">

            <h1>Faça a sua conta</h1>

            <div class="txtb">
            <input type="text" name="username"/>
            <span data-placeholder="Usuário"></span>
            </div>
           
            <div class="txtb">
            <input type="password" name="passw"/>
            <span data-placeholder="Senha"></span>
            </div>

            <div class="txtb">
                <input type="password" name="passwConf"/>
                <span data-placeholder="Redigite a senha"></span>
            </div>

            <input hidden="hidden" name="Status" value="CRIA"/>
            <button type="button" id="btConf" id="logBt" class="logbtn">Criar</button>
            
        </form>
    </main>

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(".txtb input").on("focus",function(){
            $(this).addClass("focus");
        });

         $(".txtb input").on("blur",function(){
            if($(this).val() == "")
            $(this).removeClass("focus");
        });
    </script>
    
     <script>

        $("#btConf").click(function(){
            if($(":input[name='passw']").val() == $(":input[name='passwConf']").val()){
                $("#cadast").submit();
            } else {
                alert("As senhas não são iguais! Tente novamente")
            }
        });
    
    </script>
</body>
</html>

