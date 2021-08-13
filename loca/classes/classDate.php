<?php
	class classDate{
		private $entryDate;
		private $departureDate;
		private $dateDiff;
		
		private $yearValue = 1500;
		private $monthValue = 1800;
		private $dayValue = 60;
		private $hourValue = 5;				
		
		public function __construct($entryFinal,$departureFinal) {
			$this->entryFinal = new DateTime($entryFinal,new DateTimeZone("America/sao_paulo"));
			$this->departureFinal = new DateTime($departureFinal,new DateTimeZone("America/sao_paulo"));
			$this->dateDiff = $this->entryFinal->diff($this->departureFinal);
			//var_dump($this->dateDiff);		
					
		}
		public function getLocation(){
			$finalValue = 0;
			$msg = '';
			
			if($this->dateDiff->y>0){
				$finalValue += $this->dateDiff->y * $this->yearValue;
				$msg .= ' '.$this->dateDiff->y.' ano';			
			}
			
			
			if($this->dateDiff->m>0){
				$finalValue += $this->dateDiff->m * $this->monthValue;
				$msg .= ' '.$this->dateDiff->m.' mes';			
			}
			
			
			if($this->dateDiff->d>0){
				$finalValue += $this->dateDiff->d * $this->dayValue;
				$msg .= ' '.$this->dateDiff->d.' dia';			
			}
		
			if($this->dateDiff->h>0){
				$finalValue += $this->dateDiff->h * $this->hourValue;
				$msg .= ' '.$this->dateDiff->d.' horas';			
			}
			

			if($this->dateDiff->i>30){
				$finalValue += $this->hourValue;
				$msg .= ' '.$this->dateDiff->i.' minutos';			
			}
			
						
			return "
				<h1>Diaria</h1><br><hr>
				você selecionou o periodo de {$msg}<br>
				você deverá pagar : <br>
				<strong>{$finalValue}</strong>,00			
			";				
			
		}
			
	}

?>