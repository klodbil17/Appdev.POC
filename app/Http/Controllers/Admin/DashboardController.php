<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts   = Product::count();
        $archivedProducts = Product::where('is_archived', true)->count();
        $pendingOrders   = Order::where('status', 'pending')->count();
        $deliveredOrders = Order::where('status', 'delivered')->count();

        return view('admin.dashboard', compact(
            'totalProducts',
            'archivedProducts',
            'pendingOrders',
            'deliveredOrders'
        ));
    }
}
