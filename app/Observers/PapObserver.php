<?php

namespace App\Observers;

use App\Models\Pap;

class PapObserver
{
    public function saving(Pap $pap)
    {
        if (empty($pap->user_id)) {
            $pap->user_id = auth()->id();
        }

        if (empty($pap->operating_unit_id)) {
            $pap->operating_unit_id = auth()->user()->operating_unit_id;
        }
    }

    /**
     * Handle the Pap "created" event.
     *
     * @param  \App\Models\Pap  $pap
     * @return void
     */
    public function created(Pap $pap)
    {
        //
    }

    /**
     * Handle the Pap "updated" event.
     *
     * @param  \App\Models\Pap  $pap
     * @return void
     */
    public function updated(Pap $pap)
    {
        //
    }

    /**
     * Handle the Pap "deleted" event.
     *
     * @param  \App\Models\Pap  $pap
     * @return void
     */
    public function deleted(Pap $pap)
    {
        //
    }

    /**
     * Handle the Pap "restored" event.
     *
     * @param  \App\Models\Pap  $pap
     * @return void
     */
    public function restored(Pap $pap)
    {
        //
    }

    /**
     * Handle the Pap "force deleted" event.
     *
     * @param  \App\Models\Pap  $pap
     * @return void
     */
    public function forceDeleted(Pap $pap)
    {
        //
    }
}
