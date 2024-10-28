<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'type', 'quantity', 'amount'];



    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Scopes for specific transaction types
    public function scopeSell($query)
    {
        return $query->where('type', 'sell');
    }

    public function scopePurchase($query)
    {
        return $query->where('type', 'purchase');
    }

    public function scopeAdjustment($query)
    {
        return $query->where('type', 'adjustment');
    }

    public function scopeOpenStock($query)
    {
        return $query->where('type', 'open_stock');
    }

    public function scopeSellReturn($query)
    {
        return $query->where('type', 'sell_return');
    }

    public function scopePurchaseReturn($query)
    {
        return $query->where('type', 'purchase_return');
    }

    /**
     * Scope to calculate total stock across all products, considering returns and adjustments.
     */
    public function scopeTotalStock($query)
    {
        // Calculate quantities for each type of transaction
        $openingStock = $query->openStock()->sum('quantity');
        $purchases = $query->purchase()->sum('quantity');
        $purchaseReturns = $query->purchaseReturn()->sum('quantity');
        $sales = $query->sell()->sum('quantity');
        $sellReturns = $query->sellReturn()->sum('quantity');
        $adjustments = $query->adjustment()->sum('quantity');

        // Total stock formula across all products, accounting for returns
        return $openingStock + $purchases - $purchaseReturns - $sales + $sellReturns + $adjustments;
    }
}
