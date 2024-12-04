<h1>Lista de Livros</h1>
<table>
<tr>
<th>Titulo do livro</th>

<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($livros as $livro)
<tr>
<td>{{ $livro->titulo }}</td>

<td><a href='/livros/cadastro/{{ $livro->id }}'>Editar</a></td>
<td><a href='/livros/remover/{{ $livro->id }}'>Remover</a></td>
</tr>
@endforeach
</table>

