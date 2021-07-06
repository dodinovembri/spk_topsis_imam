<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternativeValueModel extends Model
{
    public $table ='nilai_alternatif';
    public $guarded ='[]';

    public function alternative()
    {
        return $this->belongsTo('App\Models\AlternativeModel', 'id_alternatif');
    }
}
