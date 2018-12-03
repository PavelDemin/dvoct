<?php namespace Demin\Report\Components;

use Cms\Classes\ComponentBase;
use Demin\Report\Models\PostReport;
use Demin\Report\Models\TypeCatching;
use Cms\Classes\Page;

class ReportList extends ComponentBase
{
    public $posts;
    public $pageParam;
    public $noPostsMessage;
    public $postPage;
    public $sortOrder;

    protected $options = [];

    public function componentDetails()
    {
        return [
            'name'        => 'Список отчетов',
            'description' => 'Вывод списка отчетов'
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
                'title'             => 'Отчетов на странице',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Недопустимый Формат. Ожидаемый тип данных - действительное число.',
                'default'           => '9'
            ],
            'noPostsMessage' => [
                'title'             => 'Нет отчетов',
                'description'       => 'Сообщение, отображаемое в случае, если нет никаких отчетов. Это свойство используется по умолчанию компонентом.',
                'type'              => 'string',
                'default'           => 'Нет отчетов',
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'       => 'Сортировка',
                'description' => 'Атрибут, по которому будут сортироваться отчеты.',
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
                'title'       => 'Страница отчета',
                'description' => 'Название страницы для ссылки "подробнее". Это свойство используется по умолчанию компонентом.',
                'type'        => 'dropdown',
                'default'     => 'reports/report-post'
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
        $this->prepareTypeCatching();

 /*       if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->page['posts']->lastPage()) && $currentPage > 1) {
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
            }
        }*/
    }

    protected function prepareVars()
    {
     // $this->page['pageParam'] = $this->paramName('pageNumber');
      //$this->page['noPostsMessage'] = $this->property('noPostsMessage');
     // $this->page['postPage'] = $this->property('postPage');
       // $this->page['reports'] = $this->listPosts();
      /*  $params = [
            'page'    => $this->property('pageNumber'),
            'sort'    => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage')
        ];*/


        //$postOptions = post('Filter', []);
        //$options = array_merge($params,post('Filter', []));
        $this->page['reports'] = PostReport::listFrontEnd($this->prepareOptions());
        $this->page['sortOptions'] = PostReport::$allowedSortingOptions;
        $this->page['pages'] = $this->page['reports']->lastPage();
        $this->page['page'] =$this->page['reports']->currentPage();
    }

    protected function prepareTypeCatching() {
        $this->page['type_catching'] = TypeCatching::all();
    }


    public function onFilterTypeCatching() {
        $this->prepareVars();
       // $this->prepareTypeCatching();
    }

    public function prepareOptions() {
        if(post('page')) {
            $this->options['page'] = post('page');
        } else {
            $this->options['page']  = $this->property('pageNumber');
        }
        if(post('type_catching')) {
            $this->options['type_catching'] = post('type_catching');
         }
            //'page'    => $this->property('pageNumber'),
            $this->options['sort']    = $this->property('sortOrder');
            $this->options['perPage'] = $this->property('postsPerPage');

        return $this->options = array_merge($this->options,post('Filter', []));

    }

 /*   protected function listPosts()
    {
        $posts = PostReport::listFrontEnd([
            'page'    => $this->property('pageNumber'),
            'sort'    => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage')
        ]);

        return $posts;
    }*/
}