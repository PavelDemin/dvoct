<?php namespace demin\Eventfish\Models;

use Model;
use Input;
use Auth;
use October\Rain\Exception\ValidationException;

/**
 * Model
 */
class EventsFishing extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
        'type_fishing' => ['Demin\Eventfish\models\TypeFishing'],
        'city' => ['Demin\Eventfish\models\Cities']
    ];

    /*
     * Validation
     */
    public $rules = [
       // 'is_offer' => 'required|boolean',
        'fishing_place' => 'string|between:3,150',
        'description' => 'required|between:15,750',
        'type_fishing_id' => 'required|numeric',
        'city_id' => 'required|numeric',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'lon' => 'numeric',
        'lat' => 'numeric',
        'user_id' => 'required|numeric',
    ];

    public $customMessages = [
        'required' => 'Поле :attribute обязательно для заполнения!',
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'demin_eventfish_events_fishing';


    public function createEventFish($data) {
        $user = Auth::getUser();
       // $this->is_offer = Input::get('is_offer');
        array_key_exists('is_offer', $data) ? $this->is_offer='1' : $this->is_offer='0' ;
        if (array_key_exists('fishing_place', $data)) $this->fishing_place = $data['fishing_place'];
        $this->description = $data['description'];
        $this->type_fishing_id = $data['type_fishing_id'];
        $this->city_id = $data['city_id'];
        $this->start_date = $data['start_date'];
        $this->end_date = $data['end_date'];
        if (array_key_exists('lon', $data)) $this->lon = $data['lon'];
        if (array_key_exists('lat', $data)) $this->lat = $data['lat'];
        $this->user_id = $user->id;
        $this->status = '0';
        $this->is_verified = '0';
        $this->save();

    }
}