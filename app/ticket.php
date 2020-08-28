<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
	protected $table = "ticket";
	protected $primaryKey = "id_ticket";
	public $timestamps = false;

}