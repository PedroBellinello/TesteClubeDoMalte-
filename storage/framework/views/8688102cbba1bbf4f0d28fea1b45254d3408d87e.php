<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vizualizar Produtos</title>
    <style>


body{
        overflow: hidden;
      }

      div {
           display: flex;
           justify-content: center;
           align-items: center;
           height: 100vh;
           flex-direction: column;

      }

      .form {
          align-items: center;
          justify-content: center;
          border: 5px solid black;
          border-radius: 5%;
          text-align: center;
          width: 50%;
          height: 50%;

      }

      label,input {
          display: inline-block;
          width: 45%;
          margin: 0 2.5%;
          padding: 5px 10px 5px;
      }


    </style>
</head>
<body>
    <div>
       <div class="form">
        
        <label>Nome do produto:</label>
        <input type="text" name='nome' value="<?php echo e($produto->nome); ?>" readonly>
        <br><br>
        
        <label>Valor do produto:</label>
        <input type="text" name='valor' value="<?php echo e($produto->valor); ?>" readonly>
        <br><br>
        
        <label>Qtd em estoque:</label>
        <input type="text" name='estoque' value="<?php echo e($produto->estoque); ?>" readonly>
        <br><br>
        
        <label>avaliação :</label>
        <input type="text" name='avaliacao' value="<?php echo e($produto->avaliacao); ?>" readonly>
        <br><br>
      </div>
    </div>
</body>
</html>
<?php /**PATH E:\CursosProgramação\Estudojs\teste php\teste_crud\resources\views/view.blade.php ENDPATH**/ ?>