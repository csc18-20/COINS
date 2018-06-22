<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Opportunity extends Model
{
    protected $table = 'opportunities';
    protected $guarded = [];
    public function latestOmnumber(){
    	$last = DB::table('opportunities')->latest('id')->first();
    	if($last== null){
    		$latest = 8790;
    	}else{
    		$latest = $last->OM_number;
    	}
    	
    	return $latest;
    }
    public function project(){
    	return $this->hasOne(App\Project::class);
    }
    
}
