<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CalcCtrl {
    private $msgs; 
    private $form; 
    private $result; 
    private $hide_intro; 
    
    public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;      
}
 
    public function getParams(){
	$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
	$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
	$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;            
    }
    
   function validate(){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($this->form->$x) && isset($this->form->$y) && isset($this->form->$lata))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->$x == "") {
	$this->msgs->addMsg('Nie podano kwoty kretydu.');
         }
        if ( $this->form->$y == "") {
	$this->msgs->addMsg('Nie podano oprocentowania raty.');
        }
        if ( $this->form->$lata == "") {
	$this->msgs->addMsg('Nie podano na ile lat bierzemy kredyt.');
        }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (! $this->msgs->isMsgs()){
	
	    if (! is_numeric( $this->form->$x )) {
                $this->msgs->addMsg('Błędnie wprowadzona kwota.');
            }
	
            if (! is_numeric( $this->form->$y )) {
            	$this->msgs->addMsg('Błednie wprowadzone oprocentowanie');
            }		
        }
	//if (count ( $messages ) != 0) return false;
	//else return true;
        return ! $this->msgs->isMsgs();
    } 
    
    
    
    
    public function process() {
  
        $this->getParams();
        if($this->validate){
            
            $this->form->$x = floatval($this->form->$x);
            $this->form->$y = floatval($this->form->$y);
	
	//wykonanie operacji
            
            $raty = $this->form->$lata*12; //ilosc rat
            $this->$result = $this->form->$x/$raty ;
            $this->$result += $this->$result*$y/100;
            
            
            $this->msgs->addMsg('Tylko administrator dokonywać tej operacji !');
             
            
        }
        include 'calc_view.php';
    //$this->generateView();
    }
    
    
 
    
    
    
    
    
    
    
}
    
    ?>