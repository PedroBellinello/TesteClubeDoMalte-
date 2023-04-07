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
    <form action="/cadastrar-produto" method="POST">
        @csrf
        {{--nome --}}
        <label>Nome do produto:</label>
        <input type="text" name='nome'>
        <br><br>
        {{--valor --}}
        <label>Valor do produto:</label>
        <input type="text" name='valor'>
        <br><br>
        {{--estoque--}}
        <label>Qtd em estoque:</label>
        <input type="text" name='estoque'>
        <br><br>
        {{--avaliacao  --}}
        <label>Avaliação:</label>
        <input type="text" name='avaliacao'>
        <br><br>
        <button>Cadastrar produto</button>
    </form>

  </div>

</body>
</html>
