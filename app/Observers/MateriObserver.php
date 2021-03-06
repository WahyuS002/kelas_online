<?php

namespace App\Observers;

use App\Materi;

class MateriObserver
{
    public function creating(Materi $materi)
    {
        if (is_null($materi->urutan)) {
            $materi->urutan = Materi::where('kelas_id', $materi->kelas_id)->max('urutan') + 1;
            return;
        }

        $lowerPriorityMeals = Materi::where('kelas_id', $materi->kelas_id)
            ->where('urutan', '>=', $materi->urutan)
            ->get();

        foreach ($lowerPriorityMeals as $lowerPriorityMeal) {
            $lowerPriorityMeal->urutan++;
            $lowerPriorityMeal->saveQuietly();
        }
    }

    public function updating(Materi $materi)
    {
        if ($materi->isClean('urutan')) {
            return;
        }

        if (is_null($materi->urutan)) {
            $materi->urutan = Materi::where('urutan', $materi->urutan)->max('urutan');
        }

        if ($materi->getOriginal('urutan') > $materi->urutan) {
            $urutanRange = [
                $materi->urutan, $materi->getOriginal('urutan')
            ];
        } else {
            $urutanRange = [
                $materi->getOriginal('urutan'), $materi->urutan
            ];
        }

        $lowerPriorityMeals = Materi::where('urutan', $materi->urutan)
            ->whereBetween('urutan', $urutanRange)
            ->where('id', '!=', $materi->id)
            ->get();

        foreach ($lowerPriorityMeals as $lowerPriorityMeal) {
            if ($materi->getOriginal('urutan') < $materi->urutan) {
                $lowerPriorityMeal->urutan--;
            } else {
                $lowerPriorityMeal->urutan++;
            }
            $lowerPriorityMeal->saveQuietly();
        }
    }
    /**
     * Handle the materi "created" event.
     *
     * @param  \App\Materi  $materi
     * @return void
     */
    public function created(Materi $materi)
    {
        //
    }

    /**
     * Handle the materi "updated" event.
     *
     * @param  \App\Materi  $materi
     * @return void
     */
    public function updated(Materi $materi)
    {
        //
    }

    /**
     * Handle the materi "deleted" event.
     *
     * @param  \App\Materi  $materi
     * @return void
     */
    public function deleted(Materi $materi)
    {
        //
    }

    /**
     * Handle the materi "restored" event.
     *
     * @param  \App\Materi  $materi
     * @return void
     */
    public function restored(Materi $materi)
    {
        //
    }

    /**
     * Handle the materi "force deleted" event.
     *
     * @param  \App\Materi  $materi
     * @return void
     */
    public function forceDeleted(Materi $materi)
    {
        //
    }
}
