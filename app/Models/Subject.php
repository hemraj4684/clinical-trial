<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subject extends Model
{
    use HasFactory;

    /**
     * Calculate age based on provied date of birth. 
     * @param $dob
     * @return int
     */
    public static function calculateAge ($dob) :int
    {
        return Carbon::parse($dob)->age;
    }

    /**
     * Saves Subject data in Subject table.
     * @param array $data.
     * @return int id.
     */
    public function saveSubject(array $data):int
    {
       $this->first_name = strip_tags($data['firstName']);
       $this->dob  = strip_tags($data['dob']);
       $this->frequency = strip_tags($data['frequency']);
       $this->daily_category = !empty($data['dailyFrequencyCat']) ? strip_tags($data['dailyFrequencyCat']) : 0;
       $this->save();
       return $this->id;
    }
}
