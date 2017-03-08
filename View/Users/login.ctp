<div class="users form">
<?php echo $this->Session->flash('Auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Por favor ingrese su usuario y password'); ?>
        </legend>
        <?php echo $this->Form->input('username',array('label'=>'Usuario'));
        echo $this->Form->input('password',array('label'=>'Password'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>