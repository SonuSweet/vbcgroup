<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\Tracking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        // Fetching counts for different data points
        $adminsCount = DB::table('admin_users')->count();
       
    
        // Fetching order-related statistics
    
       
        
    
        // Organizing data to be passed to the view
        $data = [
            'counts' => [
               
                ['name' => "Enquires", 'count' => Enquiry::count()],
                ['name' => "Visitors", 'count' => Tracking::count()],
                            ],
            'statistics' => []
        ];
    
        // Rendering content with CSS and passing data to the view
        return $content
            ->css_file(Admin::asset("open-admin/css/pages/dashboard.css"))
            ->title('Dashboard')
            ->description('Summary of system statistics')
            ->body(view('dashboard', compact('data')));
    }
    
}
