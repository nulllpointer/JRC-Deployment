<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class projectongoingController extends CrudController{

    public function all($entity){
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\projectongoing);
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('ongoingprojecttitle', 'Title');
        $this->grid->add('ongoingprojectdescription', 'Description');
        $this->grid->add('ongoingprojectlocation', 'Location');

        $this->grid->add('ongoingprojectclient', 'Client');

        $this->addStylesToGrid();

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\projectongoing);

        $this->edit->label('Edit Gallery');

        $this->edit->add('ongoingprojecttitle', 'Title', 'text');

        $this->edit->add('ongoingprojectdescription', 'Description', 'text');


        $this->edit->add('ongoingprojectlocation', 'Location', 'text');
        $this->edit->add('ongoingprojectclient', 'Client', 'text');


        return $this->returnEditView();
    }    
}
