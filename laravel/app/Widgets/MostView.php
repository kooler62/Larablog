<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB;
// подключаем модель
use App\Posts;
class MostView extends AbstractWidget
{

    public function run()
    {
 $posts_model=new Posts;
 $most =  $posts_model->most_view();
 //dd($most);

        return view("widgets.most_view", [
            'most_view_posts'=>$most,
        ]);
    }
}