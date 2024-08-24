<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFPR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
</body>
</html>


<?php
class login{
    private $user;
    private $password;
    
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }
}

$user=$_POST["user"];
$password=$_POST["password"];
$lg = new login();
$lg->setUser($user)->setPassword($password);


if ($lg->getUser()=="IFPR"&&$lg->getPassword()=="TDS") {
    echo"Logado com Sucesso <br>";
    echo"BEM VINDO AO TDS!!!";
    echo'
<br><a href="login_form.php">Deslogar</a>';
}
else {
    echo"Login errado <br> tenta novamente<a>";
    echo'
<br><a href="login_form.php">Voltar</a>';
} 
