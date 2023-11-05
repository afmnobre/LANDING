<?php

class Fibonacci implements \Iterator {
	
	private $anterior = 1;
	private $atual = 0;
	private $key = 0;
	
	public function __contruct(int $max = 100) {
		$this->max = $max;	
	}
	
	public function current() {
		echo __FUNCTION__."\n";
		return $this->atual;
	}
	
	public function key(){
		echo __FUNCTION__."\n";
		return $this->key;
	}
	
	public function next(): void {
		echo __FUNCTION__."\n";
		$novo_atual = $this->atual;
		$this->atual += $this->anterior;
		$this->anterior = $novo_atual;
		$this->key++;
	}
	
	public function rewind(): void{
		echo __FUNCTION__."\n";
		$this->anterior = 1;
		$this->atual = 0;
		$this->key = 0;
	}
	
	public function valid(): bool {
		echo __FUNCTION__."\n";
		if($this->atual > 100){
			return false;
		}
		return true;
	}
}

$sequencia = new Fibonacci();

foreach($sequencia as $value) {
	echo "<br>Valor: $value e Chave: $key <br>";
}
