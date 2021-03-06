<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_foto extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos_fotos';

    // Eloquent asume que cada tabla tiene una clave primaria con una columna llamada id.
    // Si éste no fuera el caso entonces hay que indicar cuál es nuestra clave primaria en la tabla:
    //protected $primaryKey = 'id';

    //public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'url', 'producto_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at','updated_at'];


    // Relación de producto con establecimiento:
    public function producto()
    {
        // 1 producto pertenece a un establecimiento
        return $this->belongsTo('App\Producto', 'producto_id');
    }

}
