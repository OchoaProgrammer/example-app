<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'ventas';

    protected $fillable = ['cliente_id', 'total','fecha', 'ganancia'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'venta_producto')
                    ->withPivot('cantidad', 'precio')
                    ->withTimestamps();
    }

    public function agregarProducto(Producto $producto, $cantidad, $precio)
    {
        $this->productos()->attach($producto->id, ['cantidad' => $cantidad, 'precio' => $precio]);
    }
}

