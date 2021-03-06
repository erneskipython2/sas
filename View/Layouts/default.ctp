<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Sistema Autogestionado de Salud');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
<?php
echo $this->Html->script('jquery');
echo $this->Html->css('estilo2',array('inline' => false));
?>




<div class="menu">
<?php
echo $this->Html->link('Ordenes de Servicio',array('controller'=>'OrdenServicios','action'=>'index'),array('escape'=>false)).'|';
echo $this->Html->link('Titulares',array('controller'=>'titulars','action'=>'index'),array('escape'=>false)).'|';
echo $this->Html->link('Beneficiarios',array('controller'=>'beneficiarios','action'=>'index'),array('escape'=>false)).'|';
echo $this->Html->link('Establecimientos',array('controller'=>'establecimientos','action'=>'index'),array('escape'=>false)).'|';
echo $this->Html->link('Salir',array('controller'=>'users','action'=>'logout'),array('escape'=>false)).'|';
?>
</div>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color:#CEE3F6;">
	<div id="container">
		<div id="header">
			<?php echo $this->Html->image('LOGO.png', array('alt' => 'CakePHP'));?>
		</div>
		<div id="content">
		

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

			<p>
				<?php echo "Desarrollado por: Ing. Erneski Coronado"; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
