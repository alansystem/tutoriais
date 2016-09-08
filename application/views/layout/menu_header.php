<div class="row">
	<div class="container center-align">
		<hr>
		<?php echo $this->session->userdata('nome_cliente'); ?>
		<hr>
		  <div class="row">
		    <a href="<?php echo base_url('pasta/ano').'/'.$this->session->userdata('id_cliente'); ?>" class="waves-effect waves-light btn">Início</a>
		    <a href="<?php echo base_url('pasta/logout'); ?>" class="waves-effect waves-light btn red darken-2">Sair</a>
		  </div>
	</div>
 </div>