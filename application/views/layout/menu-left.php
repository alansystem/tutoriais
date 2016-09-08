<aside>
         
<ul id="sidebar-nav">

<li><a href="#">Artigos</a>
<ul class="drop">
	<li><a href="<?php echo base_url('artigo/gerenciar') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page.png">Gerenciar</a></li>
	<?php if($this->session->userdata('permissao') == 'E'){ ?>
	<li><a href="<?php echo base_url('artigo/gerenciar/add') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page_add.png">Cadastrar</a></li>
	<?php } ?>
</ul>
</li>

<?php if($this->session->userdata('permissao') == 'E'){ ?>
<li><a href="#">Categorias</a>
<ul class="drop">
	<li><a href="<?php echo base_url('categoria/gerenciar') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page.png">Gerenciar</a></li>
	<li><a href="<?php echo base_url('categoria/gerenciar/add') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page_add.png">Cadastrar</a></li>	
</ul>
</li>
<?php } ?>


<?php if($this->session->userdata('permissao') == 'E'){ ?>
<li><a href="#">Clientes</a>
<ul class="drop">
	<li><a href="<?php echo base_url('cliente/gerenciar') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page.png">Gerenciar</a></li>
	<li><a href="<?php echo base_url('cliente/gerenciar/add') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page_add.png">Cadastrar</a></li>
</ul>
</li>
<?php } ?>


<?php if($this->session->userdata('permissao') == 'E'){ ?>
<li><a href="<?php echo base_url('cliente/gerenciar') ?>">Comunicados</a>
<ul class="drop">
	<li><a href="<?php echo base_url('comunicados/gerenciar') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page.png">Gerenciar</a></li>
	<li><a href="<?php echo base_url('comunicados/gerenciar/add') ?>"><img src="<?php echo base_url(); ?>img/icons/16/page_add.png">Cadastrar</a></li>
	
</ul>
</li>
<?php } ?>


<?php if($this->session->userdata('permissao') == 'E'){ ?>
<li><a href="#">Usuários do Sistema</a>
<ul class="drop">
  	<li><a href="<?php echo base_url('login/usuario') ?>"><img src="<?php echo base_url(); ?>img/icons/16/user.png">Gerenciar</a></li>
	<li><a href="<?php echo base_url('login/usuario/index/add') ?>"><img src="<?php echo base_url(); ?>img/icons/16/user_add.png">Cadastrar</a></li>
</ul>
</li>
<?php } ?>
</ul>
</aside>

<div id="page-content" class="container_12">