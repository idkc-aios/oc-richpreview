<?php namespace Aios\RichPreviews;

use System\Classes\PluginBase;
use Cms\Classes\Page;
use Log;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
			'Aios\RichPreviews\Components\RichPreviews' => 'richPreview'
		];
	}

	public function registerSettings()
	{
	}
	
	public function register()
	{
		\Event::listen('backend.form.extendFields', function($widget) {
			if (!$widget->model instanceof \Cms\Classes\Page) return;
			
			$widget->removeField('meta_title');
			$widget->removeField('meta_description');
			
			$widget->addFields([
				'settings[meta_title]' => [
					'label'        => 'cms::lang.editor.meta_title',
					'tab'          => 'cms::lang.editor.meta',
					'span'         => 'full',
					'type'         => 'text',
					'commentAbove' => 'aios.richpreviews::lang.column.meta.title.comment'
				],
			], 'primary');
			
			$widget->addFields([
				'settings[meta_description]' => [
					'label'        => 'cms::lang.editor.meta_description',
					'tab'          => 'cms::lang.editor.meta',
					'size'         => 'small',
					'span'         => 'full',
					'type'         => 'textarea',
					'commentAbove' => 'aios.richpreviews::lang.column.meta.description.comment'
				],
			], 'primary');
			
			$widget->addFields([
				'settings[og_image]' => [
					'label'        => 'aios.richpreviews::lang.column.og.image.label',
					'tab'          => 'aios.richpreviews::lang.tab.share',
					'span'         => 'right',
					'commentAbove' => 'aios.richpreviews::lang.column.og.image.comment',
					'type'         => 'mediafinder',
					'mode'         => 'image',
					'useCaption'   => 1,
					'thumbOptions' => [
						'mode'      => 'auto',
						'extension' => 'auto'
					]
				],
			], 'primary');
			
			$widget->addFields([
				'settings[og_title]' => [
					'label'        => 'aios.richpreviews::lang.column.og.title.label',
					'tab'          => 'aios.richpreviews::lang.tab.share',
					'span'         => 'left',
					'type'         => 'text',
					'commentAbove' => 'aios.richpreviews::lang.column.og.title.comment'
				],
			], 'primary');

			$widget->addFields([
				'settings[og_description]' => [
					'label'        => 'aios.richpreviews::lang.column.og.description.label',
					'tab'          => 'aios.richpreviews::lang.tab.share',
					'size'         => 'small',
					'span'         => 'left',
					'type'         => 'textarea',
					'commentAbove' => 'aios.richpreviews::lang.column.og.description.comment'
					
				],
			], 'primary');
		});
	}
}
