<?php
namespace App\Observers;

use App\projectcompleted;

class projectcompletedObserver
{
    
    /**
     * Listen to the projectcompleted creating event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function creating(projectcompleted $projectcompleted)
    {
        //code...
    }

     /**
     * Listen to the projectcompleted created event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function created(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted updating event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function updating(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted updated event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function updated(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted saving event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function saving(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted saved event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function saved(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted deleting event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function deleting(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted deleted event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function deleted(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted restoring event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function restoring(projectcompleted $projectcompleted)
    {
        //code...
    }

    /**
     * Listen to the projectcompleted restored event.
     *
     * @param  projectcompleted  $projectcompleted
     * @return void
     */
    public function restored(projectcompleted $projectcompleted)
    {
        //code...
    }
}