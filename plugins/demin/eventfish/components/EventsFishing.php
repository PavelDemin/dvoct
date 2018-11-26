<?php namespace Demin\Eventfish\Components;

use Cms\Classes\ComponentBase;
use Demin\Eventfish\models\EventsFishing as EventFish;
use Demin\Eventfish\models\TypeFishing as TypeFish;
use Demin\Eventfish\models\Cities;
use Flash;
use Request;
use Session;
//use Input;
use Redirect;
use Exception;
use ValidationException;
use ApplicationException;
use Validator;

class EventsFishing extends ComponentBase
{

    public $eventsfish;
    public $typefish;
    public $cities;
   // protected $user;

    public function componentDetails()
    {
        return [
            'name'        => 'EventsFishing Component',
            'description' => 'Приглашения на совместную рыбалку'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    private function getEventsFishing() {
        return EventFish::all();
    }

    private function getTypeFishing() {
        return TypeFish::all();
    }

    private function getCities() {
        return Cities::where('country_id',1)->where('region','Хабаровский край')->limit('100')->get();
    }


    public function onRun() {
        $this->addCss('assets/css/fishing.css');
        $this->addJs('assets/js/fishing.js');
        $this->addCss('assets/css/select2.min.css');
        $this->addJs('assets/js/select2.full.min.js');
        $this->eventsfish = $this->getEventsFishing();
        $this->typefish = $this->getTypeFishing();
        $this->cities = $this->getCities();

    }

    public function onEventFish()
    {
        if (Request::isMethod('post')) {
            $data = post();
            if (Session::token() != $data['_token']) throw new ApplicationException('Ошибка отправки формы. Обновите страницу.');

            $rules = [
                'description' => 'required',
                //'email' => 'required|email',
            ];

            $validation = Validator::make($data, $rules);

            if ($validation->fails()) {
                throw new ValidationException($validation);
            }

                $ef = new EventFish();
                //$user = self::getUser();
                $ef->createEventFish($data);
                Flash::success('Jobs done!');


        return Redirect::refresh();

        } else {
            throw new Exception('Request method is not POST. Sorry!');
        }

    }

    public function onGet() {
        $c = post('value');

        $city = new Cities();

        $k = $city->getCity($c);

        return $k;



    }


}