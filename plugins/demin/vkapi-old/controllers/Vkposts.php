<?php namespace Demin\Vkapi\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Demin\Vkapi\Models\Vkpost;
use Flash;

/**
 * Vkpost Back-end Controller
 */
class Vkposts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Demin.Vkapi', 'vkapi', 'vkpost');
    }

    public function index_onPost() {
        if (($checkedIds = post('checked'))) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Vkpost::find($postId))) {
                    continue;
                }
                $vk = new Vkpost();
                $s = $vk->set_wall_post($post);
                if($s) {
                    Flash::success('Пост опубликован!');
                } else {
                    Flash::error('Ошибка публикации!');
                }
            }
        }
        return $this->listRefresh();
    }

    public function onDeletePostVk() {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            $vk = new Vkpost();
            foreach ($checkedIds as $objectId) {
                if ($vk->where('id', $objectId)->count() == 1) {
                    $vk->where('id', $objectId)->delete();
                }
            }

            Flash::success('Пост успешно удален!');
        }

        return $this->listRefresh();
    }
}