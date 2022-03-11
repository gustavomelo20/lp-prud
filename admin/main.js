
    $(document).ready(function(){
        $("#button").click(function(){
          $("#main_principal").load('teste.php');
        });
    });

    $(document).ready(function(){
        $("#voltar").click(function(){
          $("#main_principal").load('principal.php');
        });
    });

