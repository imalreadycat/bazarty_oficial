        <h2 style="color: orange; margin-top: 5%;"> <?= $clientes["nome"] ?> </h2>
        <hr align="center" width="100%" size="1" color="orange">
  
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">
                Nome:<br> <input type="text" name="nomec" value="<?= $clientes["nome"] ?>"><br>
                CPF:<br> <input type="text" name="cpf" value="<?= $clientes["cpf"] ?>"><br>
                <br> <br>
                
            <?php if($clientes["sexo"]== "F"){ ?>  
                Sexo: <label> Feminino </label>
                <input type="radio" name="sexo" value="F" checked="">
              <label> Masculino </label>
               <input type="radio" name="sexo" value="M">
              <br><br>
            <?php }else{ ?> 
              Sexo:             
<INPUT TYPE="RADIO" NAME="sexc" VALUE="F" value="<?= $clientes["sexo"]?>"> Feminino
<INPUT TYPE="RADIO" NAME="sexc" VALUE="M" value="<?= $clientes["sexo"]?>"> Masculino
              <br><br>
            <?php } ?> 
              <script>
       $(document).ready(function() {	
           	
            //CARREGA CALENDÁRIO 
            $('#calendario').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: '2016-01-12',
                editable: true,
                eventLimit: true, 
            });
                
    </script>
    
    <style>
        #calendario{
            position: relative;
            width: 70%;
            
        }        
    </style>
    
</head>
<body>    
    <div id='calendario'>          
                Data de Nascimento: <input type="date" name="dataNc" value="<?= $clientes["aniversario"] ?>">  
    </div>  
             
                E-mail:<br> <input type="text" name="emailc" value="<?= $clientes["email"] ?>"><br>
                Senha:<br> <input type="text" name="senhac" value="<?= $clientes["senha"] ?>"><br>
               
        Tipo:             
<INPUT TYPE="RADIO" NAME="tipoc" VALUE="Adm" value="<?= $clientes["tipo"] ?>"> Administrador
<INPUT TYPE="RADIO" NAME="tipoc" VALUE="Cli" value="<?= $clientes["tipo"] ?>"> Usuário
                <button type="submit">Atualizar</button>
                <br><br><br><br>
                <a style="color: orange" href="./cliente/listar/">Ver clientes cadastrados</a>
                

        </form>
        
        
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>