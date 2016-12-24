<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB;
// подключаем модель
use App\Excerptions;


class NavExDay extends AbstractWidget{

    public function run(){

        $excerptions_model=new Excerptions;
        $ex_id=date('z')+1;
        $ex=$excerptions_model->index($ex_id);


        return view("widgets.nav_ex_day", [
            'ex'=>$ex,
            
        ]);
    }
}