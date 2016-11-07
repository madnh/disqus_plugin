<?php namespace Madnh\Disqus\Components;

use Cms\Classes\ComponentBase;
use Madnh\Disqus\Models\Settings;

class Disqus extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Disqus',
            'description' => 'Display Disqus box on your site'
        ];
    }

    public function defineProperties()
    {
        return [
            'page_url' => [
                'title' => 'Page URL',
                'description' => 'Page\'s canonical URL',
                'type' => 'string'
            ],
            'page_id_prefix' => [
                'title' => 'Prefix of page ID',
                'type' => 'string'
            ],
            'page_id' => [
                'title' => 'Page ID',
                'description' => 'Page\'s unique identifier',
                'type' => 'string'
            ],

        ];
    }

    public function onRun()
    {
        $disqus = [
            'page_url' => $this->property('page_url'),
            'page_id_prefix' => $this->property('page_id_prefix'),
            'page_id' => $this->property('page_id')
        ];

        $disqus['sub_domain'] = Settings::get('sub_domain');
        $disqus['noscript_content'] = Settings::get('noscript_content');

        $this->page['disqus'] = $disqus;
    }

}