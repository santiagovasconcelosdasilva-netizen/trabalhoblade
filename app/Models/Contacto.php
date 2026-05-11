<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nome', 'email', 'assunto', 'mensagem'])]
class Contacto extends Model
{
    //
}
