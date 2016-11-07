<?php namespace MaDnh\Disqus;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'madnh.disqus::lang.plugin.name',
            'description' => 'madnh.disqus::lang.plugin.description',
            'author' => 'MaDnh',
            'icon' => 'icon-comments-o',
            'homepage' => 'https://github.com/madnh/disqus_plugin'
        ];
    }

    public function registerComponents()
    {
        return [
            'MaDnh\Disqus\Components\Disqus' => 'disqus'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'Disqus',
                'description' => 'The #1 way to build your audience',
                'category' => 'Plugins',
                'icon' => 'icon-comments-o',
                'class' => 'MaDnh\Disqus\Models\Settings',
                'order' => 500,
                'permissions' => ['madnh.disqus.access_settings']
            ]
        ];
    }
}
