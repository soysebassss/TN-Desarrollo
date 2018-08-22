<div class="row">
  <div class="col-md-12 col-12" >
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  	<br> 
  	<?php 
  	
  	$pago = $this->formapagos->findAll();
  	$factura = $this->facturas->findAll();
			if (isset($pago) && isset($factura)) {
				$enero = 0;
				$febrero = 0;
				$marzo = 0;
				$abril = 0;
				$mayo = 0;
				$junio = 0;
				$julio = 0;
				$agosto = 0;
				$septiembre = 0;
				$octubre = 0;
				$noviembre = 0;
				$diciembre = 0;
				foreach($factura as $key){
				$formaPAg = $key->get("fac_for_pago");
				foreach ($pago as $keyPag) {
					//print_r($key->get('cli_id'));
				if ($keyPag->get("for_id") == $formaPAg) {
					if ($keyPag->get("for_clave") == 2) {
					$fecha = $keyPag->get("for_fecha");
					//echo $fecha."<br>";
					$splita = explode("-",$fecha);
					switch ($splita[1]) {
						case "01":
							$enero +=  $key->get("fac_total");
							break;
						case "02":
							$febrero +=  $key->get("fac_total");
							break;
						case "03":
							$marzo +=  $key->get("fac_total");
							break;
						case "04":
							$abril +=  $key->get("fac_total");
							break;
						case "05":
							$mayo +=  $key->get("fac_total");
							break;
						case "06":
							$junio +=  $key->get("fac_total");
							break;
						case "07":
							$julio +=  $key->get("fac_total");
							break;
						case "08":
							$agosto +=  $key->get("fac_total");
							break;
						case "09":
							$septiembre +=  $key->get("fac_total");
							break;
						case "10":
							$octubre +=  $key->get("fac_total");
							break;
						case "11":
							$noviembre +=  $key->get("fac_total");
							break;
						case "12":
							$diciembre +=  $key->get("fac_total");
							break;
						
						default:
							# code...
							break;
					}
					}
					 
				}
				}
			   
			 
		 
	}
			}
			 
 
  	?>
 
  			
 
  	<canvas id="myChart" width="400" height="300"></canvas>
	<script type="text/javascript">
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre","Noviembre","Diciembre"],
	        datasets: [{
	            label: 'Ganancias',
	            data: ["<?php if(isset($enero)){echo $enero;}else{echo 0;} ?>", "<?php if(isset($febrero)){echo $febrero;}else{echo 0;} ?>", "<?php if(isset($marzo)){echo $marzo;}else{echo 0;} ?>", "<?php if(isset($abril)){echo $abril;}else{echo 0;} ?>", "<?php if(isset($mayo)){echo $mayo;}else{echo 0;} ?>","<?php if(isset($junio)){echo $junio;}else{echo 0;} ?>", "<?php if(isset($julio)){echo $julio;}else{echo 0;} ?>", "<?php if(isset($agosto)){echo $agosto;}else{echo 0;} ?>", "<?php if(isset($septiembre)){echo $septiembre;}else{echo 0;} ?>", "<?php if(isset($octubre)){echo $octubre;}else{echo 0;} ?>", "<?php if(isset($noviembre)){echo $noviembre;}else{echo 0;} ?>", "<?php if(isset($diciembre)){echo $diciembre;}else{echo 0;} ?>"],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 99, 132, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)',
	               'rgba(255,99,132,1)'

	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});
	</script>
  </div>
</div>