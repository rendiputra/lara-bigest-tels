<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class confirm extends Model

{

	protected $table = "confirm_payment";

	protected $primaryKey = "id_confirm";

	//public $timestamps = false;

	public function get_users()
	{
		return $this->belongsTo(user::class, 'id_users', 'id_users');
	}

	public function get_ticket()
	{
		return $this->belongsTo(ticket::class, 'id_ticket', 'id_ticket');
	}

	public function get_orderticket()
	{
		return $this->belongsTo(orderticket::class, 'id_orderticket', 'id_orderticket');
	}



}