<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">
        Name: <input id="name" type="text" name="name"><br>

        <input type="submit" id="submit_form" value="Clique">
    </form>

    <script>
        document.getElementById("submit_form").addEventListener("click",()=>{
            let ajax = new XMLHttpRequest();
            let name = "name="+document.getElementById("name").value;
            ajax.open("POST","http://localhost/banco/form.php"+name,true);
            axax.onreadystatechange = function(){
                if(ajax.readyState == XMLHttpRequest.DONE && xhr.status == 200){
                    console.log(ajax.reponseText);
                }
            }

            ajax.send(name);
        })
    </script>
</body>
</html> -->
<?php   
    require_once("./rotas.php");
    require_once("./core/router.php");
    
    echo router::request($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);
