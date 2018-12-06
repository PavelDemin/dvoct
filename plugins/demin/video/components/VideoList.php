<?php namespace Demin\Video\Components;

use Cms\Classes\ComponentBase;
use Demin\Video\Models\Video;
use Cms\Classes\Page;
use Redirect;

class VideoList extends ComponentBase
{


    public $videos;

    public $pageParam;

    public $noPostsMessage;

    public $postPage;

    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name' => 'Список видеороликов',
            'description' => 'Список видеороликов на странице'
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title'       => 'Параметр постраничной навигации',
                'description' => 'Параметр, необходимый для постраничной навигации.',
                'type'        => 'string',
                'default'     => '{{ :page }}'
            ],
            'postsPerPage' => [
                'title'             => 'Видео на странице',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Недопустимый Формат. Ожидаемый тип данных - действительное число.',
                'default'           => '10'
            ],
            'noPostsMessage' => [
                'title'             => 'Нет видео',
                'description'       => 'Сообщение, отображаемое в случае, если нет никаких видео. Это свойство используется по умолчанию компонентом.',
                'type'              => 'string',
                'default'           => 'Нет видео',
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'       => 'Сортировка',
                'description' => 'Атрибут, по которому будут сортироваться видео.',
                'type'        => 'dropdown',
                'default'     => 'published_at desc',
                'options'     => [
                    'title asc' => 'Заголовок (по возрастанию)',
                    'title desc' => 'Заголовок (по убыванию)',
                    'created_at asc' => 'Дата создания (по возрастанию)',
                    'created_at desc' => 'Дата создания (по убыванию)',
                    'updated_at asc' => 'Дата обновления (по возрастанию)',
                    'updated_at desc' => 'Дата обновления (по убыванию)',
                    'published_at asc' => 'Дата публикации (по возрастанию)',
                    'published_at desc' => 'Дата публикации (по убыванию)'
                ]
            ],
            'postPage' => [
                'title'       => 'Страница видеоролика',
                'description' => 'Название страницы для ссылки "подробнее". Это свойство используется по умолчанию компонентом.',
                'type'        => 'dropdown',
                'default'     => 'video/video-post'
            ]
        ];
    }

    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->prepareVars();

        $this->videos = $this->page['videos'] = $this->listVideos();

        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->videos->lastPage()) && $currentPage > 1) {
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
            }
        }
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');
        $this->postPage = $this->page['postPage'] = $this->property('postPage');
    }

    protected function listVideos()
    {
        $videos = Video::listFrontEnd([
            'page'    => $this->property('pageNumber'),
            'sort'    => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage')
        ]);

        return $videos;
    }
}