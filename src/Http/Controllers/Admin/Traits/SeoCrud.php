<?php
/**
 * Created by PhpStorm.
 * User: thomascombe
 * Date: 2019-05-09
 * Time: 19:55
 */

namespace Thomascombe\SeotoolsBackpack\Http\Controllers\Admin\Traits;

use Backpack\CRUD\CrudPanel;

/**
 * Trait SeoCrud
 * @package Thomascombe\SeotoolBackpack\Http\Controllers\Admin\Traits
 *
 * @property CrudPanel crud
 */
trait SeoCrud
{
    protected function setSeoFields(array $extras = [])
    {
        $model = $this->crud->getModel();

        abort_if(
            empty($model->seoFields) || !is_array($model->seoFields),
            500,
            sprintf('Your model %s need to use SeoFields trait or contain $seoFields array', get_class($model)));


        $this->crud->addField([
            'name'  => 'follow_separator',
            'type'  => 'custom_html',
            'value' => '<br><h2>SEO</h2><hr>'
        ]);

        foreach ($model->seoFields as $fieldName => $fieldAttribute) {
            $this->crud->addField(
                array_merge(
                    [
                        'name' => $fieldName,
                        'type'  => 'text',
                    ],
                    $extras,
                    $fieldAttribute
                )
            );
        }
    }
}
