<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 11/03/2015
 * Time: 23:13
 */

class exercicios_de_media_e_quantidade {

    public $notas;
    public $totaldenotas ;
    public $media;
    public $alunossexo;
    public $quant;
    public $aprovados;
    public $reprovados;
	public $m;
	public $f;
	

    public function __construct(){

        $this->alunossexo = array("MASCULINO","FEMININO","MASCULINO","MASCULINO","MASCULINO","FEMININO","FEMININO","FEMININO", "FEMININO","FEMININO");
        $this->notas = array(3,3,2,4,3,7,6,8,10,8,8,8,8);
	    $this->m = "MASCULINO";
	    $this->f = "FEMININO";

    }

    //Adicionando valores em meu array de alunossexo e notas

    public function adicionarvalores($sexo,$nota){

        if( $this->m == $sexo || $this->f == $sexo){

            array_push($this->alunossexo, $sexo);

        }else{

            print "Seu valor é invalido entre com MASCULINO ou FEMININO" ."<br>";

        }


        if( $nota <= 20 ) {

            array_push($this->notas, $nota);
        }else{

            print "Seu valor é invalido entre com um numero menor ou igual a 20 de nota" ."<br>";
        }


    }
    //Calcula a média das notas
    public function media(){

        $this->totaldenotas = array_sum($this->notas);
        $this->media = $this->totaldenotas / count($this->notas) ;      

    }
	
	//Realiza a checagem da aprovacao
	public function aprovacao(){
	
		if($this->media >= 6){

           $this->aprovados =  "Média é 6. *** Parabéns ***" . "<br>";

            print $this->aprovados;
        }else {

            $this->reprovados = "Média é 6 tente novamente que terá exito" . "<br>";

            print $this->reprovados;
			
		}
	
	}
	
	//Realiza a impressao dos valores de cada prova
	public function provavalor(){
	
	for($i=0;$i< count($this->notas); $i++) {

        echo "A prova de  número : [" . $i ."] teve o valor |= " . $this->notas[$i]. "<br/>";
    }
	
	
	}

    //Soma a quantidade de alunos do sexo masculino e feminino

    public function quantidadesexo(){

        $this->quant =  array_count_values($this->alunossexo);

    }
	
	//Localiza e imprime os sexos maxculino e feminino
	public function amostradesexo(){
	
		if(array_key_exists($this->m,$this->quant)){

		print "<br/>" . "As pessoas do sexo " . $this->m . " são : " . $this->quant[$this->m] . "<br/>";

		} else {

        print "<br/>" . "Os valores não foram encontrados";

		}
		if(array_key_exists($this->f,$this->quant)){

		print "<br/>" . "As pessoas do sexo " . $this->f . " são : " . $this->quant[$this->f] . "<br/>";

		} else {

        print "<br/>" . "Os valores não foram encontrados";

		}
		
	}

    //Imprime os resultados
    public function imprimir_resultados(){

        echo "<strong> Resultado das provas aplicadas: </strong>" . "<br>" . "<br>";
        self::provavalor();
        echo "<br>" . "<br>" . " Sua média das " . count($this->notas). " provas é:   " . "<strong>" . $this->media ."</strong>"  . "<br>"."<br>";
		//Chamando o metodo
		self::aprovacao();
		
        echo "<br>"."<strong>Amostragem do sexo das pessoas: </strong>" . "<br>" . "<br>";
		echo "A quantidade de pessoas analizadas são: " . count($this->alunossexo) . "<br>"; 
        //Chamando o metodo
		self::amostradesexo();

        echo "<br>";

		

    }

//id_categoria

}

$cal = new exercicios_de_media_e_quantidade();

$cal->adicionarvalores("FEMININO",10);
$cal->adicionarvalores("FEMININO",1);
$cal->adicionarvalores("FEMININO",8);
$cal->adicionarvalores("MASCULINO",5);


$cal->media();
$cal->quantidadesexo();
$cal->imprimir_resultados();

