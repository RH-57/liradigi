<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DashboardController
{
    public function index() {
        $todayVisitors = Visitor::whereDate('visit_date', Carbon::today())->count();
        $todayMessages = Message::whereDate('created_at', Carbon::today())->count();

        $visitorStats = Visitor::select(
                DB::raw('DATE(visit_date) as date'),
                DB::raw('COUNT(*) as total')
            )
            ->whereMonth('visit_date', Carbon::now()->month)   // bulan berjalan
            ->whereYear('visit_date', Carbon::now()->year)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        // ambil array untuk chart
        $dates = $visitorStats->pluck('date')->toArray();
        $totals = $visitorStats->pluck('total')->toArray();

        return view('admins.dashboards.index', compact(
            'todayVisitors',
            'todayMessages',
            'dates',
            'totals'
        ));
    }
}
