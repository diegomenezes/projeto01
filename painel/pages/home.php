<?php $usuariosOnline = Painel::listarUsuariosOnline(); ?>
<div class="box-content w100">
		<h2><i class="fa fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>

		<div class="box-metricas">
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Usuários Online</h2>
					<p><?php echo count($usuariosOnline); ?></p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Total de Visitas</h2>
					<p>555</p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Visitas Hoje</h2>
					<p>47</p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="clear"></div>
		</div><!--box-metricas-->
</div><!--box-content-->
<div class="clear"></div>

<div class="box-content w100">
	<h2><i class="fa fa-user-friends"></i>Usuários Online</h2>
	<div class="table-responsive">
		<div class="row">
			<div class="col">
				<span>IP</span>
			</div><!--col-->	
		<div class="col">
			<span>Última Ação</span>
		</div><!--col-->
		<div class="clear"></div>
		</div><!--row-->	

		<div class="row">
			<div class="col">
				<span>192.468.555.222</span>
			</div><!--col-->	
		<div class="col">
			<span>20/06/2020 19:22:00</span>
		</div><!--col-->
		<div class="clear"></div>
		</div><!--row-->	


	</div><!--table-responsive-->
</div><!--box-content-->