<?php

namespace App\Http\Controllers\SearchLocation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class SearchlocationController extends Controller
{
    //
    public function multSelect()
    {
        return view('search');
    }
    public function index(Request $request)
    {

        if ($request->has('input'))
        {
            $name = $request->input;

            $users = DB::table('locations')->select('name', 'country', 'properties')
                ->where('name', 'like', '%' . $name . '%')->get();

            if ($users === null)
            {
                $location = '<div>';

                $location .= '<div id="searched-row" class="d-flex justify-content-between px-3">';

                $location .= '<div style="color: red;">Not found</div>';

                $location .= '</div></div>';

                echo $location;
            }

            else
            {
                $location = '<table id="searched-row"><tbody>';

                foreach ($users as $row)
                {
                    $location .= '<tr>';

                    $location .= '<td class="pl-3"><p style="background: #928f8f; border-radius: 5px; "><span><i class="fas fa-map-marker-alt"></i></span></p></td>';

                    $location .= '<td class="pl-3 name"><p>'.$row->name.',<span style="opacity: 0.6;">'.$row->country.'</span></p></td>';

                    $location .= '<td ><p style="padding-left: 40px;">'.$row->properties.'</p></td>';

                    $location .= '</tr>';

                }

                $location .= '</tbody></table>';

                echo $location;
            }
        }
    }
}
