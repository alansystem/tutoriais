<?php 	
class Datas{

function converte_data($data) {
	 
	    /*
	     * Caso a data tenha horas, 
	     * separa a data da hora.
	     */
	    $hora = '';
	 
	    if (strstr($data, ' ')) {
	        $data = explode(' ', $data);
	 
	        $hora = $data[1];
	        $data = $data[0];
	    }
	 
	    /*
	     * Reorganiza a data para ficar 
	     * no padrão americano.
	     * yyyy-mm-dd hh:mm:ss
	     */
	    $data = explode('/', $data);
	    $data = array_reverse($data);
	    $data = implode('-',$data);
	 
	    /*
	     * Se a data possui hora,
	     * a função retorna a data e hora.
	     * Caso não exista hora,
	     * retorna apenas a data
	     */
	    if ($hora != '') {
	        return $data . ' ' . $hora;
	    }
	    else {
	        return $data;
	    }
	 
	} 

}

?>