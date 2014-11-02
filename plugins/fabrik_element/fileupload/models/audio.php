<?php
/**
 * Fileupload adaptor to render audio play
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.element.fileupload
 * @copyright   Copyright (C) 2005-2013 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Fileupload adaptor to render audio play
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.element.fileupload
 * @since       3.0
 */

class AudioRender
{
	/**
	 * Render output
	 *
	 * @var  string
	 */
	public $output = '';

	/**
	 * Render audio in the list view
	 *
	 * @param   object  &$model   Element model
	 * @param   object  &$params  Element params
	 * @param   string  $file     Row data for this element
	 * @param   object  $thisRow  All row's data
	 *
	 * @return  void
	 */

	public function renderListData(&$model, &$params, $file, $thisRow)
	{
		$this->render($model, $params, $file);
	}

	/**
	 * Render audio in the form view
	 *
	 * @param   object  &$model   Element model
	 * @param   object  &$params  Element params
	 * @param   string  $file     Row data for this element
	 *
	 * @return  void
	 */

	public function render(&$model, &$params, $file)
	{
		$file = str_replace("\\", "/", COM_FABRIK_LIVESITE . $file);
		//$this->output = "<embed src=\"$file\" autostart=\"false\" playcount=\"true\" loop=\"false\" height=\"50\" width=\"200\"  type=\"audio/mpeg\" />";
		
		/**
		 * Theoretically this should make sure browsers that support HTML 5 use it, if no HTML5 then IE will use 'object'
		 * and everything else will use 'embed'.  Trying to make sure nothing does autoplay, but FF is being difficult!
		 */
		
		$this->output = '
<audio src="' . $file . '"  controls>
<!--[if !ie]> -->
	<object data="' . $file . '"
      type="audio/x-mpeg">
		<param name="autoplay"
       		value="false" />
		<param name="width"
       		value="140" />
		<param name="height"
       		value="40" />
		<param name="controller"
       		value="true" />
		<param name="autostart"
       		value="0" />
		Oops!
	</object>
<!--<![endif]-->
<!--[if ie]>	
	<embed
		src="' . $file . '"
		autostart="false"
		playcount="true"
		loop="false"
		height="50"
		width="200"
		type="audio/mpeg"
	/>
<![endif]-->
</audio>
		';
	}

	/**
	 * Build Carousel HTML
	 *
	 * @param   string  $id       Widget HTML id
	 * @param   array   $data     Images to add to the carousel
	 * @param   object  $model    Element model
	 * @param   object  $params   Element params
	 * @param   object  $thisRow  All rows data
	 *
	 * @return  string  HTML
	 */

	public function renderCarousel($id = 'carousel', $data = array(), $model = null, $params = null, $thisRow = null)
	{
		$rendered = '';
		$id .= '_audio_carousel';

		if (!empty($data))
		{
			$rendered = '
			<div id="' . $id . '"></div>
			';
			$app = JFactory::getApplication();
			$input = $app->input;
			if ($input->get('format') != 'raw')
			{
				$js = '
				jwplayer("' . $id . '").setup({
					width: "250",
					height: "30",
					playlist: [
				';
				$files = array();

				foreach ($data as $file)
				{
					$files[] .= '
						{
							"file": "' . COM_FABRIK_LIVESITE . $file . '"
						}
					';
				}

				$js .= implode(',', $files);
				$js .= ']
				});
				';
				FabrikHelperHTML::script('plugins/fabrik_element/fileupload/lib/jwplayer/jwplayer.js', $js);
			}
		}

		return $rendered;
	}
}
