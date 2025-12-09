<?php namespace CRSCompany\Popup\Components;

use Cms\Classes\ComponentBase;
use Tailor\Models\EntryRecord;

/**
 * Popup Component
 *
 * @link https://docs.octobercms.com/4.x/extend/cms-components.html
 */
class Popup extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Popup Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/4.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->addCss(['components/popup/Popup.scss']);
        $this->addJs(['components/popup/Popup.js']);

        $data = EntryRecord::inSection('Popup')
            ->where('is_enabled', true)
            ->first();

        $this->page['popupData'] = $data;
    }
}
