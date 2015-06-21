<?php
namespace App\Http\Controllers;

use App\Infrastructures\Messageable;

/**
 * Class TesterController
 * @package App\Http\Controllers
 */
class TesterController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('tester.index');
    }

    /**
     * @param Messageable $message
     * @return \Illuminate\View\View
     */
    public function getFunctional(Messageable $message)
    {
        return view('tester.functional', ['message' => $message->getMessage()]);
    }
}
