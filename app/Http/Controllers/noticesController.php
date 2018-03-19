<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class noticesController extends CrudController
{

    public function all($entity)
    {
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\notices);
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('ongoingprojecttitle', 'OngoingProjectTitle');
        $this->grid->add('ongoingprojectdescription', 'OngoingProjectDescription');
        $this->grid->add('ongoingprojectlocation', 'OngoingProjectLocation');

        $this->grid->add('ongoingprojectclient', 'OngoingProjectClient');

        $this->grid->add('completedprojecttitle', 'CompletedProjectTitle');
        $this->grid->add('completedprojectdescription', 'CompletedProjectDescription');
        $this->grid->add('completedprojectlocation', 'CompletedProjectLocation');

        $this->grid->add('completedprojectclient', 'CompletedProjectClient');

        $this->addStylesToGrid();

        return $this->returnView();
    }

    public function edit($entity)
    {

        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\notices);

        $this->edit->label('Edit Gallery');

        $this->edit->add('ongoingprojecttitle', 'OngoingProjectTitle', 'text');

        $this->edit->add('ongoingprojectdescription', 'OngoingProjectDescription', 'text');

        $this->edit->add('ongoingprojectlocation', 'OngoingProjectLocation', 'text');

        $this->edit->add('ongoingprojectclient', 'OngoingProjectClient', 'text');

        $this->edit->add('completedprojecttitle', 'CompletedProjectTitle', 'text');

        $this->edit->add('completedprojectdescription', 'CompletedProjectDescription', 'text');

        $this->edit->add('completedprojectlocation', 'CompletedProjectLocation', 'text');

        $this->edit->add('completedprojectclient', 'CompletedProjectClient', 'text');

        return $this->returnEditView();
    }
}
