<?php
App::import('Model', 'Sexo');
App::import('Model', 'Edocivil');
App::import('Model', 'Estado');
App::import('Model', 'Municipio');
App::import('Model', 'Parroquia');
App::import('Model', 'Insai');
App::import('Model', 'SedeInsai');
App::import('Model', 'Departamento');
App::import('Model', 'Unidad');
App::import('Model', 'Cargo');
App::import('Model', 'Tipo'); 


class TitularsController extends AppController {
    public $helpers=array('Html','Form');
    public $components=array('Session');
	
    public function index() {
        $params=  array('order'=>'nombres desc','recursive' => 0);
        $this->set('titulares', $this->Titular->find('all',$params));
        //$this->set('titulares',  $this->Titular->findById(1));
    }
	

	
    public function add() {
        if($this->request->is('post')){
            //insertar los datos
            //$sql='INSERT INTO titulars() '
			//cargamos foto
				if ($this->data['Titular']['foto_titular']) {				
				$file = new File($this->request->data['Titular']['foto_titular']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['foto_titular']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['foto_titular']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($foto_titular['tmp_name'], $destino.$foto_titular['name']);					
					$file->write($data);
					$file->close();
				}
			}
						//cargamos partida
				if ($this->data['Titular']['partida_nacimiento']) {				
				$file = new File($this->request->data['Titular']['partida_nacimiento']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['partida_nacimiento']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['partida_nacimiento']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($partida_nacimiento['tmp_name'], $destino.$partida_nacimiento['name']);					
					$file->write($data);
					$file->close();
				}
			}
						//cargamos cedula
				if ($this->data['Titular']['cedula_digital']) {				
				$file = new File($this->request->data['Titular']['cedula_digital']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['cedula_digital']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['cedula_digital']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($cedula_digital['tmp_name'], $destino.$cedula_digital['name']);					
					$file->write($data);
					$file->close();
				}
			}
									//cargamos titulo
				if ($this->data['Titular']['titulo_digital']) {				
				$file = new File($this->request->data['Titular']['titulo_digital']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['titulo_digital']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['titulo_digital']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($titulo_digital['tmp_name'], $destino.$titulo_digital['name']);					
					$file->write($data);
					$file->close();
				}
			}
			//guardo los catos		
			
            if($this->Titular->save($this->request->data)):
				$this->Session->setFlash('Titular guardado');
				$this->redirect(array('action'=>'index'));
            endif;    
            }else{
				$sexo = new Sexo();         
				$sexos = $sexo->find('list', array('fields' => array('Sexo.id', 'Sexo.sexo')));
				$this->set('sexos', $sexos);  
				
				$civil = new Edocivil();         
				$civils = $civil->find('list', array('fields' => array('Edocivil.id', 'Edocivil.civil')));
				$this->set('civils', $civils); 
							
				$estado = new Estado();         
				$estados = $estado->find('list', array('fields' => array('Estado.id', 'Estado.estado')));
				$this->set('estados', $estados);

				$municipio = new Municipio();         
				$municipios = $municipio->find('list', array('fields' => array('Municipio.id', 'Municipio.municipio')));
				$this->set('municipios', $municipios);
				
				$parroquia = new Parroquia();         
				$parroquias = $parroquia->find('list', array('fields' => array('Parroquia.id', 'Parroquia.parroquia')));
				$this->set('parroquias', $parroquias);
				
				$insai = new Insai();         
				$insais = $insai->find('list', array('fields' => array('Insai.id', 'Insai.insai')));
				$this->set('insais', $insais);
				
				$sede = new SedeInsai();         
				$sedes = $sede->find('list', array('fields' => array('SedeInsai.id', 'SedeInsai.sede')));
				$this->set('sedes', $sedes);
				
				$departamento = new Departamento();         
				$departamentos = $departamento->find('list', array('fields' => array('Departamento.id', 'Departamento.departamento')));
				$this->set('departamentos', $departamentos);
				
				$unidad = new Unidad();         
				$unidads = $unidad->find('list', array('fields' => array('Unidad.id', 'Unidad.unidad')));
				$this->set('unidads', $unidads);
				
				$cargo = new Cargo();         
				$cargos = $cargo->find('list', array('fields' => array('Cargo.id', 'Cargo.cargo')));
				$this->set('cargos', $cargos);		

				$tipo = new Tipo();         
				$tipos = $tipo->find('list', array('fields' => array('Tipo.id', 'Tipo.tipo')));
				$this->set('tipos', $tipos);				
			}
        
        
    }
	
	public function edit($id=null){
		$this->Titular->id=$id;
		if($this->request->is('get')):
			$this->request->data=$this->Titular->read();
				$sexo = new Sexo();         
				$sexos = $sexo->find('list', array('fields' => array('Sexo.id', 'Sexo.sexo')));
				$this->set('sexos', $sexos);
				$civil = new Edocivil();         
				$civils = $civil->find('list', array('fields' => array('Edocivil.id', 'Edocivil.civil')));
				$this->set('civils', $civils); 
							
				$estado = new Estado();         
				$estados = $estado->find('list', array('fields' => array('Estado.id', 'Estado.estado')));
				$this->set('estados', $estados);

				$municipio = new Municipio();         
				$municipios = $municipio->find('list', array('fields' => array('Municipio.id', 'Municipio.municipio')));
				$this->set('municipios', $municipios);
				
				$parroquia = new Parroquia();         
				$parroquias = $parroquia->find('list', array('fields' => array('Parroquia.id', 'Parroquia.parroquia')));
				$this->set('parroquias', $parroquias);
				
				$insai = new Insai();         
				$insais = $insai->find('list', array('fields' => array('Insai.id', 'Insai.insai')));
				$this->set('insais', $insais);
				
				$sede = new SedeInsai();         
				$sedes = $sede->find('list', array('fields' => array('SedeInsai.id', 'SedeInsai.sede')));
				$this->set('sedes', $sedes);
				
				$departamento = new Departamento();         
				$departamentos = $departamento->find('list', array('fields' => array('Departamento.id', 'Departamento.departamento')));
				$this->set('departamentos', $departamentos);
				
				$unidad = new Unidad();         
				$unidads = $unidad->find('list', array('fields' => array('Unidad.id', 'Unidad.unidad')));
				$this->set('unidads', $unidads);
				
				$cargo = new Cargo();         
				$cargos = $cargo->find('list', array('fields' => array('Cargo.id', 'Cargo.cargo')));
				$this->set('cargos', $cargos);		

				$tipo = new Tipo();         
				$tipos = $tipo->find('list', array('fields' => array('Tipo.id', 'Tipo.tipo')));
				$this->set('tipos', $tipos);	
			else:
			
						//cargamos foto
				if ($this->data['Titular']['foto_titular']) {				
				$file = new File($this->request->data['Titular']['foto_titular']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['foto_titular']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['foto_titular']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($foto_titular['tmp_name'], $destino.$foto_titular['name']);					
					$file->write($data);
					$file->close();
				}
			}
						//cargamos partida
				if ($this->data['Titular']['partida_nacimiento']) {				
				$file = new File($this->request->data['Titular']['partida_nacimiento']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['partida_nacimiento']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['partida_nacimiento']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($partida_nacimiento['tmp_name'], $destino.$partida_nacimiento['name']);					
					$file->write($data);
					$file->close();
				}
			}
						//cargamos cedula
				if ($this->data['Titular']['cedula_digital']) {				
				$file = new File($this->request->data['Titular']['cedula_digital']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['cedula_digital']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['cedula_digital']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($cedula_digital['tmp_name'], $destino.$cedula_digital['name']);					
					$file->write($data);
					$file->close();
				}
			}
									//cargamos titulo
				if ($this->data['Titular']['titulo_digital']) {				
				$file = new File($this->request->data['Titular']['titulo_digital']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->data['Titular']['titulo_digital']['name']);
				$ext = $path_parts['extension'];							
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->Session->setFlash('Solo puedes subir imagenes.');
					$this->render();
				} else {
					$date = $this->data['Titular']['titulo_digital']['name'];
					$filename =$date.'-post-image.'.$ext;					
					$data = $file->read();
					$file->close();
					$destino = WWW_ROOT.'/img/'.$ext;
					$file = new File(WWW_ROOT.'/img/'.$filename,true);
					move_uploaded_file($titulo_digital['tmp_name'], $destino.$titulo_digital['name']);					
					$file->write($data);
					$file->close();
				}
			}
				if($this->Titular->save($this->request->data)):
				$this->Session->setFlash('Titular '.$this->request->data['Titular']['nombres'].' guardado!');
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
			if($this->Titular->delete($id)):
				$this->Session->setFlash('Titular Eliminado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	
	}
	
    function pdf()
    {
          Configure::write('debug',0);
          $this->layout = 'pdf'; //this will use the pdf.ctp layout
          $this->set('nombreArchivo',    'pdfs'.DIRECTORY_SEPARATOR .
$this->generarNombreArchivo());
          $this->set('contenido',
$this->generarTablaHTML());
          $this->render();
    }


/**Genera el nombre de archivo aleatorio*/
    private function generarNombreArchivo()
    {
        mt_srand((double)microtime()*1000);
        return sha1(microtime());
    }
    /**Genera la tabla con los datos para que la utilicen en lo que
necesiten*/
    

	private function generarTablaHTML()
    {
        $datos = $this->getPosts();
        $tablaHTML = '<table border="1" cellspacing="2" cellpadding="2">
                              <tr>
                                  <th>Post</th>
                                <th align="right">Cedula</th>
                                <th align="left">Nombres</th>
                                <th align="left">Apellidos</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Direccion</th>
                            </tr>';
        foreach($datos as $clave=>$titulare)
        {
            //$this->log($titulare , LOG_DEBUG);
              $tablaHTML .= '<tr>
                                  <td>' . $titulare["Post"]["id"] . '</td>
                                  <td>' . $titulare["Post"]["cedula"] . '</td>
                                  <td>' . $titulare["Post"]["nombres"] .
'</td>
                                  <td>' . $titulare["Post"]["apellidos"] .
'</td>
                                  <td>' . $titulare["Post"]["fecha_de_nacimiento"] . '</td>
                                  <td>' . $titulare["Post"]["direccion"] . '</td>
                            </tr>';
        }
        $tablaHTML .= '</table>';
        return $tablaHTML;
    }

	
}