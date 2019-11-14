<?php 
session_start();
    $_SESSION["Status"] = ".";
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		body{
            margin: 0;
            padding: 0;
            font-family: montserrat,sans-serif;
            background-image: linear-gradient(120deg,#34495e,#7f8c8d);
        }
        .animated-text{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 0 40px;
            height: 60px;
            overflow: hidden;
        }

        .line{
            text-transform: uppercase;
            text-align: center;
            font-size: 40px;
            line-height: 60px;
        }

        .line:first-child{
            animation: anim 12s infinite;
        }

        @keyframes anim{
            0%{
                margin-top: 0;
            }
             16%{
                margin-top: -60px;
            }
             33%{
                margin-top: -120px;
            }
             50%{
                margin-top: -180px;
            }
             66%{
                margin-top: -120px;
            }
             82%{
                margin-top: -60px;
            }
             100%{
                margin-top: 0;
            }
        }
        .logbtn{
        display: block;
        width: 10%;
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
   </style>
</head>
<body>
	<div class="animated-text">
        <div class="line">Olá</div>
        <div class="line">Bem vindo</div>
        <div class="line">A minha</div>
        <div class="line">Página restrita</div>
</div>
<a href="index2.html"><button type="button" id="logBt" id="btConf" class="logbtn">Voltar</button></a>
</body>
</html>