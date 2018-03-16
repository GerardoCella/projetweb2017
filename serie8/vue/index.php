
		<p>
		<?php
			$Tabletest->read();
			foreach($Tabletest->data as $k){
				echo $k->NOM .', '. $k->PRENOM .'<br>';
			}
		?>
		</p>
