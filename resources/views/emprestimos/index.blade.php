<h1>Lista de Emprestimos</h1>
<table>
<tr>
<th>Emprestimos</th>

<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($emprestimos as $emprestimo)
<tr>
<td>{{ $emprestimos->data_emprestimo }}</td>

<td><a href='/emprestimos/cadastro/{{ $emprestimo->id }}'>Editar</a></td>
<td><a href='/emprestimos/remover/{{ $emprestimo->id }}'>Remover</a></td>
</tr>

@endforeach
</table>


