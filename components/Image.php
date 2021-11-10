<?php namespace Codecycler\Previewify\Components;

use Cms\Classes\ComponentBase;

/**
 * Image Component
 */
class Image extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codecycler.previewify::lang.component.image_name',
            'description' => 'codecycler.previewify::lang.component.image_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'imageId' => [
                'title'             => 'codecycler.previewify::lang.component.image_image_id_title',
                'description'       => 'codecycler.previewify::lang.component.image_image_id_description',
                'type'              => 'string',
                'showExternalParam' => false,
            ],
            'previewifyTitle' => [
                'title'             => 'codecycler.previewify::lang.component.image_previewify_title_title',
                'type'              => 'string',
                'showExternalParam' => true,
            ],
            'previewifySubtitle' => [
                'title'             => 'codecycler.previewify::lang.component.image_previewify_subtitle_title',
                'type'              => 'string',
                'showExternalParam' => true,
            ],
            'previewifyImage' => [
                'title'             => 'codecycler.previewify::lang.component.image_previewify_image_title',
                'type'              => 'string',
                'showExternalParam' => true,
            ],
            'previewifyReadingTime' => [
                'title'             => 'codecycler.previewify::lang.component.image_previewify_reading_time_title',
                'type'              => 'string',
                'group'             => 'Blog',
                'showExternalParam' => true,
            ],
            'previewifyCategory' => [
                'title'             => 'codecycler.previewify::lang.component.image_previewify_category_title',
                'type'              => 'string',
                'group'             => 'Blog',
                'showExternalParam' => true,
            ],
            'previewifyPrice' => [
                'title'             => 'codecycler.previewify::lang.component.image_previewify_price_title',
                'type'              => 'string',
                'group'             => 'Ecommerce',
                'showExternalParam' => true,
            ],
            'previewifyFromPrice' => [
                'title'             => 'codecycler.previewify::lang.component.image_previewify_from_price_title',
                'type'              => 'string',
                'group'             => 'Ecommerce',
                'default'           => '',
                'showExternalParam' => true,
            ],
        ];
    }

    public function getTitle()
    {
        return $this->property('previewifyTitle') ?? $this->page->meta_title;
    }

    public function getSubtitle()
    {
        return $this->property('previewifySubtitle') ?? $this->page->meta_description;
    }
}
