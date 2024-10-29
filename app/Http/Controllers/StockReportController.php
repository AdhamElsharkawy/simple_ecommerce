<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class StockReportController extends Controller
{
    public function index()
    {

        $totalStock = Transaction::totalStock();
        $totalSales = Transaction::sell()->sum('amount');
        $totalPurchases = Transaction::purchase()->sum('amount');

        // Group transactions by date and type to create trend data for the chart
        $stockTrends = Transaction::select(DB::raw('DATE(created_at) as date'), 'type', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('date', 'type')
            ->orderBy('date')
            ->get()
            ->groupBy('date')
            ->map(function ($transactions) {
                return $transactions->mapWithKeys(function ($transaction) {
                    return [$transaction->type => $transaction->total_quantity];
                });
            });

        $transactions = Transaction::with('product')
            ->latest()
            ->get(['product_id', 'type', 'quantity', 'amount', 'created_at']);

        dd($transactions->toArray());

        return Inertia::render('Dashboard', [
            'totalStock' => $totalStock,
            'totalSales' => $totalSales,
            'totalPurchases' => $totalPurchases,
            'transactions' => $transactions,
            'stockTrends' => $stockTrends,
        ]);
    }
}
