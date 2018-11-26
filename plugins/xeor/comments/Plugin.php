<?php namespace Xeor\Comments;

use Backend;
use Controller;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'xeor.comments::lang.plugin.name',
            'description' => 'xeor.comments::lang.plugin.description',
            'author' => 'Sozonov Alexey',
            'icon' => 'icon-comments'
        ];
    }

    public function registerComponents()
    {
        return [
            'Xeor\Comments\Components\Comments' => 'comments',
        ];
    }

    public function registerPermissions()
    {
        return [
            'xeor.comments.access_other_comments' => [
                'tab' => 'xeor.comments::lang.comments.comments',
                'label' => 'xeor.comments::lang.comments.access_other_comments'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'comments' => [
                'label' => 'xeor.comments::lang.comments.comments',
                'url' => Backend::url('xeor/comments/comments'),
                'icon' => 'icon-comments',
                'permissions' => ['xeor.comments.*'],
                'order' => 500,
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'xeor.comments::lang.settings.menu_label',
                'description' => 'xeor.comments::lang.settings.menu_description',
                'category'    => 'xeor.comments::lang.settings.comments',
                'icon'        => 'icon-comments',
                'class'       => 'Xeor\Comments\Models\Settings',
                'order'       => 500,
                'permissions' => ['xeor.comments.*']
            ]
        ];
    }
}
