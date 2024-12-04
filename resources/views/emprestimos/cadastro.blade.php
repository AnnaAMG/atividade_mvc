<h1>Emprestimo de Livros</h1>

<form method="POST" action="/livros/salvar">
@csrf

<label>Data do Emprestimo:</label>
<input type="date" name="data_emprestimo" value="{{@$resultado->data_emprestimo}}"><br>
<label>Data de Devolução:</label>
<input type="date" name="data_devolucao" value="{{@$resultado->data_devolucao}}"><br>


<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>