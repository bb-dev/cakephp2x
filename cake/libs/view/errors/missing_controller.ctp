<?php
/**
 *
 * PHP Version 5.x
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<h2><?php __('Missing Controller', false); ?></h2>
<p class="error">
	<strong><?php __('Error', false); ?>: </strong>
	<?php echo sprintf(__('%s could not be found.'), '<em>' . $controller . '</em>'); ?>
</p>
<p class="error">
	<strong><?php __('Error', false); ?>: </strong>
	<?php echo sprintf(__('Create the class %s below in file: %s'), '<em>' . $controller . '</em>', APP_DIR . DS . 'controllers' . DS . Inflector::underscore($controller) . '.php'); ?>
</p>
<pre>
&lt;?php
class <?php echo $controller; ?> extends AppController {

	public $name = '<?php echo $controllerName; ?>';
}
?&gt;
</pre>
<p class="notice">
	<strong><?php __('Notice', false); ?>: </strong>
	<?php echo sprintf(__('If you want to customize this error message, create %s'), APP_DIR . DS . 'views' . DS . 'errors' . DS . 'missing_controller.ctp'); ?>
</p>