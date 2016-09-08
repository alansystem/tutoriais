</div> <!-- Fim Page Content -->
<br class="cl" />
</div>

<!-- Start Footer -->
<footer> Copyright ©2015 - Artigos / Tutoriais</footer>
<!-- End Footer -->

<!-- Javascript at the bottom for fast page loading --> 

 
<?php if(!isset($output)){ ?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script> 
<?php } ?>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.datepicker-pt-BR.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tipsy.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.treeview.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cookie.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.lightbox-0.5.min.js"></script> 



<?php if($this->uri->segment(1).'/'.$this->uri->segment(2) == 'contasapagar/gerenciar' || $this->uri->segment(1).'/'.$this->uri->segment(2) == 'contasareceber/gerenciar'){ ?>
<?php } ?>

<script type="text/javascript">

$(document).ready(function(){

	$(".dataFormato").mask("99/99/9999");

});
</script>

<!-- Page specific Javascript --> 
<script type="text/javascript">
base_url = "<?php echo base_url(); ?>";
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/functions.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script> 
<!--[if lt IE 7 ]>
    <script src="<?php echo base_url(); ?>js/dd_belatedpng.js"></script>
  <![endif]--> 

</body>
</html>
