<?php
/**
 * @package	HikaShop for Joomla!
 * @version	2.3.4
 * @author	hikashop.com
 * @copyright	(C) 2010-2014 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><div class="hikashop_paypal_end" id="hikashop_paypal_end">
	<span id="hikashop_paypal_end_message" class="hikashop_paypal_end_message">
		<?php echo JText::sprintf('PLEASE_WAIT_BEFORE_REDIRECTION_TO_X', $this->payment_name).'<br/><span id="hikashop_paypal_button_message">'. JText::_('CLICK_ON_BUTTON_IF_NOT_REDIRECTED').'</span>';?>
	</span>
	<span id="hikashop_paypal_end_spinner" class="hikashop_paypal_end_spinner hikashop_checkout_end_spinner">
	</span>
	<br/>
	<form id="hikashop_paypal_form" name="hikashop_paypal_form" action="<?php echo $this->payment_params->url;?>" method="post">
		<div id="hikashop_paypal_end_image" class="hikashop_paypal_end_image">
			<input id="hikashop_paypal_button" type="submit" class="btn btn-primary" value="<?php echo JText::_('PAY_NOW');?>" name="" alt="<?php echo JText::_('PAY_NOW');?>" />
		</div>
		<?php
			foreach($this->vars as $name => $value ) {
				echo '<input type="hidden" name="'.$name.'" value="'.htmlspecialchars((string)$value).'" />';
			}
			JRequest::setVar('noform',1); ?>
	</form>
	<script type="text/javascript">
		<!--
		document.getElementById('hikashop_paypal_form').submit();
		//-->
		<!--[if IE]>
			document.getElementById('hikashop_paypal_button').style.display = 'none';
			document.getElementById('hikashop_paypal_button_message').innerHTML = '';
		<![endif]-->
	</script>
</div>
