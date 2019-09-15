<h2 style="color: orange; margin-top: 5%;"> Cadastre-se aqui: </h2>
        <hr align="center" width="100%" size="1" color="orange">
  
<div class="corpinho">
 <div class="caixinha">
    <form action="" method="POST">
        <label for="fname">Nome</label> <br>
            <input type="text"  name="nomec" placeholder="Thalia Beatriz..."><br><br>
        <label  for="fname">CPF</label><br>
             <input type="text"  name="cpf" placeholder="12345678963"><br><br>
   Sexo:             
<INPUT TYPE="RADIO" NAME="sexc" VALUE="F"> Feminino
<INPUT TYPE="RADIO" NAME="sexc" VALUE="M"> Masculino

               
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
                Data de Nascimento: <input type="date" name="dataNc" required/>       
    </div>  
        <label  for="fname">Email</label><br>
             <input type="text"  name="emailc" placeholder="thalia@gmail.com"><br><br>
        <label  for="fname">Senha</label><br>
              <input type="text"  name="senhac" placeholder="0000000"><br><br>
        <label  for="fname">Tipo</label><br>
                <input type="text"  name="tipoc" placeholder="x"><br><br>
                

     <br><br> <a style="color: orange" href="./endereco/cadastro/"><button style="color: orange">Cadastrar</button></a>
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
        
      