<?php
App::import('Model', 'Sexo');
App::import('Model', 'Enfermedad');
App::import('Model', 'Discapacidad');
App::import('Model', 'Titular');
App::import('Model', 'Parentesco');

class BeneficiariosController extends AppController {
    public $helpers=array('Html','Form');
    public $components=array('Session');
	
    public function index() {
        $params=  array('recursive' => 0);
        $this->set('beneficiarios', $this->Beneficiario->find('all',$params));
           }
	

	
    public function add() {
        if($this->request->is('post')){

			//guardo los datos		
			
            if($this->Beneficiario->save($this->request->data)):
				$this->Session->setFlash('Beneficiario guardado');
				$this->redirect(array('action'=>'index'));
            endif;    
            }else{
				$sexo = new Sexo();         
				$sexos = $sexo->find('list', array('fields' => array('Sexo.id', 'Sexo.sexo')));
				$this->set('sexos', $sexos);  
				
				$parentesco = new Parentesco();         
				$parentescos = $parentesco->find('list', array('fields' => array('Parentesco.id', 'Parentesco.parentesco')));
				$this->set('parentescos', $parentescos); 
				
				$enfermedad = new Enfermedad();         
				$enfermedads = $enfermedad->find('list', array('fields' => array('Enfermedad.id', 'Enfermedad.enfermedad')));
				$this->set('enfermedads', $enfermedads); 
							
				$discapacidad = new Discapacidad();         
				$discapacidads = $discapacidad->find('list', array('fields' => array('Discapacidad.id', 'Discapacidad.discapacidad')));
				$this->set('discapacidads', $discapacidads);
				
				$titular = new Titular();         
				$titulars = $titular->find('list', array('fields' => array('Titular.id', 'Titular.cedula')));
				$this->set('titulars', $titulars);
								
			}
        
        
    }
	
	public function edit($id=null){
		$this->Beneficiario->id=$id;
		if($this->request->is('get')):
			$this->request->data=$this->Beneficiario->read();
				$sexo = new Sexo();         
				$sexos = $sexo->find('list', array('fields' => array('Sexo.id', 'Sexo.sexo')));
				$this->set('sexos', $sexos);  
				
				$parentesco = new Parentesco();         
				$parentescos = $parentesco->find('list', array('fields' => array('Parentesco.id', 'Parentesco.parentesco')));
				$this->set('parentescos', $parentescos); 
				
				$enfermedad = new Enfermedad();         
				$enfermedads = $enfermedad->find('list', array('fields' => array('Enfermedad.id', 'Enfermedad.enfermedad')));
				$this->set('enfermedads', $enfermedads); 
							
				$discapacidad = new Discapacidad();         
				$discapacidads = $discapacidad->find('list', array('fields' => array('Discapacidad.id', 'Discapacidad.discapacidad')));
				$this->set('discapacidads', $discapacidads);	
				
				$titular = new Titular();         
				$titulars = $titular->find('list', array('fields' => array('Titular.id', 'Titular.cedula')));
				$this->set('titulars', $titulars);
			else:
			
						
			
				if($this->Beneficiario->save($this->request->data)):
				$this->Session->setFlash('Beneficiario '.$this->request->data['Beneficiario']['nombres'].' guardado!');
				$this->redirect(array('action'=>'index'));
				else:
					$this->Session->setFlash('No se pudo guardar');
					endif;
				endif;
	}
	
	public function delete($id){
		if($this->request->is('get')):
			throw new MethodNotAllowedException();
		else:
			if($this->Beneficiario->delete($id)):
				$this->Session->setFlash('Beneficiario Eliminado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	
	}


}


