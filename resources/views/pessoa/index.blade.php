<html>
<head>
</head>
<body>
   @foreach($listaP as $pessoa) 
        Nome: {{ $pessoa->nome }} <br>
        Telefone:
        @foreach($pessoa->telefone as $tel) 
            {{$tel->telefone}} <span>, </span> 
        @endforeach
        <br><br>
   @endforeach
</body>
</html>