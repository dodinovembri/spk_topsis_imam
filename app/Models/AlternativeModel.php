<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternativeModel extends Model
{
    public $table ='alternatif';
    public $guarded ='[]';
    public $timestamps = false;

    public function alternative_value()
    {
    	return $this->hasMany('App\Models\AlternativeValueModel', 'id_alternatif', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\TypeModel', 'id_jenis_alternatif');
    }
}
