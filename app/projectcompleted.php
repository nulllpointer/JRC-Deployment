<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class projectcompleted extends Model {
	use ObservantTrait;
	
    protected $table = 'projectcompleted';

}
