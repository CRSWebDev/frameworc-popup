<?php namespace CRSCompany\Popup;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/4.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Popup',
            'description' => 'No description provided yet...',
            'author' => 'CRS',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'CRSCompany\Popup\Components\Popup' => 'Popup',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'crscompany.popup.some_permission' => [
                'tab' => 'Popup',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'popup' => [
                'label' => 'Popup',
                'url' => Backend::url('crscompany/popup/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['crscompany.popup.*'],
                'order' => 500,
            ],
        ];
    }
}
