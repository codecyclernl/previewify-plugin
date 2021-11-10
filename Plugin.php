<?php namespace Codecycler\Previewify;

use Backend;
use Codecycler\Previewify\Components\Image;
use System\Classes\PluginBase;

/**
 * Previewify Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'codecycler.previewify::lang.plugin.name',
            'description' => 'codecycler.previewify::lang.plugin.description',
            'author'      => 'Codecycler',
            'icon'        => 'icon-image',
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            Image::class => 'previewifyImage',
        ];
    }
}
