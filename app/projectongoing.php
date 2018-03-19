<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class projectongoing extends Model {
	use ObservantTrait;
	
    protected $table = 'projectongoing';

}
