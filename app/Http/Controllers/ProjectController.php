<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Show a list of all projects.
     */
    public function index(): View
    {
        $projetos = DB::table('projects')->get();

        return view('projetos', ['projetos' => $projetos]);
    }
}
