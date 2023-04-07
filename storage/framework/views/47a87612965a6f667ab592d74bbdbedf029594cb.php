<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
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
           padding: 50px;

      }

      form {
          align-items: center;
          justify-content: center;
          border: 5px solid black;
          border-radius: 5%;
          text-align: center;
          width: 50%;
          height: 50%;
          padding-top: 55px ;
          padding-bottom: 10px
      }

      label,input {
          display: inline-block;
          width: 45%;
          margin: 0 2.5%;
          padding: 5px 10px 5px;
      }

      button{
        font-size: 15px
      }


</style>
</head>
<body>
  <div>
    <form action="/editar-produto/<?php echo e($produto->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <label>Nome do produto:</label>
        <input type="text" name='nome' value="<?php echo e($produto->nome); ?>">
        <br><br>
        
        <label>Valor do produto:</label>
        <input type="text" name='valor' value="<?php echo e($produto->valor); ?>">
        <br><br>
        
        <label>Qtd em estoque:</label>
        <input type="text" name='estoque' value="<?php echo e($produto->estoque); ?>">
        <br><br>
        
        <label>avaliação:</label>
        <input type="text" name='avaliacao' value="<?php echo e($produto->avaliacao); ?>">
        <br><br>
        <button>Salvar alterações</button>
    </form>
  </div>
</body>
</html>
<?php /**PATH E:\CursosProgramação\Estudojs\teste php\teste_crud\resources\views/edit.blade.php ENDPATH**/ ?>