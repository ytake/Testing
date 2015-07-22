<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class BehatController extends Controller
{

    /**
     * @param Request $request
     * @return array|string
     */
    public function getIndex(Request $request)
    {
        return $request->input('message', 'Laravel');
    }

}
