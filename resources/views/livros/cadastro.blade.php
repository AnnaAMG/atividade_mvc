<h1>Cadastrar Livros</h1>
<form method="POST" action="/livros/salvar">
@csrf
<label>Titulo do livro:</label>
<input type="text" name="titulo" value="{{@$resultado->titulo}}"><br>


<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>