<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

    /**
     * Save Cohort data.
     * @param $subjectId
     * @param $cohortName
     * @return bool
     */
    public function saveCohort($subjectId, $cohortName)
    {
       $this->subject_id = strip_tags($subjectId);
       $this->name = strip_tags($cohortName);
       return $this->save();
    }
    
    /**
     * Generate message based on age and frequency.
     * @param $age
     * @param $name
     * @param $frequency
     * @return string
     */
    public function cohortName($age, $frequency) : string
    {
        if($age > 18 && in_array($frequency, ['monthly','weekly'])) {
            $cohortName = "A";
        } else if($age > 18 && in_array($frequency, ['daily'])) {
            $cohortName = "B";
        }
        return $cohortName;
    }
}
