<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Harimayco\Menu\Models\Menus;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'menus' => Menus::where('menu_nama', 'Sidebar')->first()->items()->whereRelation('groups', 'grup_menu_item_grup_id', '=', Auth::user()->groups[0]->grup_id)->get()
        ];

        return view('backoffice.dashboard.index', compact('data'));
    }
}
