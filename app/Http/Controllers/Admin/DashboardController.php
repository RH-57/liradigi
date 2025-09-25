<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController
{
    public function index() {

        return view('admins.dashboards.index');
    }
}
