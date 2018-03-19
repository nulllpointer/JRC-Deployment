<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class projectcompletedController extends CrudController{

    public function all($entity){
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\projectcompleted);
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);

        $this->grid->add('completedprojecttitle', 'Title');
        $this->grid->add('completedprojectdescription', 'Description');
        $this->grid->add('completedprojectlocation', 'Location');

        $this->grid->add('completedprojectclient', 'Client');

        $this->addStylesToGrid();

        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\projectcompleted);

        $this->edit->label('Edit Gallery');

        $this->edit->add('completedprojecttitle', 'Title', 'text');

        $this->edit->add('completedprojectdescription', 'Description', 'text');


        $this->edit->add('completedprojectlocation', 'Location', 'text');
        $this->edit->add('completedprojectclient', 'Client', 'text');

        return $this->returnEditView();
    }    
}
