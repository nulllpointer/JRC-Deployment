<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class carousel extends Model {
    use ObservantTrait;

    protected $table = 'carousel';

}
