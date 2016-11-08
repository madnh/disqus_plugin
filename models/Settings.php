<?php namespace MaDnh\Disqus\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'disqus_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public function initSettingsData()
    {
        $this->enable = '1';
        $this->noscript_content = '<div class="alert alert-warning" role="alert"><strong>Disqus:</strong> Your browser does not support JavaScript!</div>';
        $this->disabled_content = '<div class="alert alert-success" role="alert"><strong>Hi,</strong> Disqus is off</div>';
    }
}