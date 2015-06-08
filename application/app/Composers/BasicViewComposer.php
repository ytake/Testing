<?php
namespace App\Composers;

use Illuminate\View\View;

/**
 * Class BasicViewComposer
 * @package App\Composers
 *
 */
class BasicViewComposer
{

    /**
     * Bind data to the view.
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('variable', 'testing');
    }
}
