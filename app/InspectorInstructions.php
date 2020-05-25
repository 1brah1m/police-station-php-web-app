<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectorInstructions extends Model
{
    public function police_case()
    {
        return $this->belongsTo('App\PoliceCase', 'case_no');
    }

    public function police_inspector()
    {
        return $this->belongsTo('App\PoliceInspector', 'inspector_id');
    }
}
