<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
protected $table = 'usuarios';
protected $fillable = ['nome', 'email', 'senha'];
}

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
protected $table = 'livros';
protected $fillable = ['titulo', 'id_autor', 'id_categoria'];
}

use Illuminate\Database\Eloquent\Model;

class Emprestimos extends Model
{
protected $table = 'emprestimos';
protected $fillable = ['id_usuario', 'id_autor', 'data_emprestimo', 'data_devolucao'];
}

use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
protected $table = 'autores';
protected $fillable = ['nome'];
}