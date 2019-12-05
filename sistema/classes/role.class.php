<?php 
class Role extends Main
{
    protected $permissions;
    private  $name_role;
    private  $id;
    private  $roleId;
	
	
	 public function setRoleId($value){
		$this->Util()->ValidateInteger($value);
		$this->roleId = $value;
	}

    public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}
	public function setNombre($value){
		if($this->Util()->ValidateRequireField($value, 'Nombre rol')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->nombre = $value;
		}
	}
	public function Info(){
		$sql = 'SELECT * FROM roles WHERE ID = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();	
		return $info;
	}
    // Crea un objeto role que esta asociado con permisos
     public function Save(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		$sql = "
		INSERT INTO  roles(
				`role_name`,
				usuario_creacion,
				fecha_creacion 
				)
				VALUES (
				'".$this->nombre."',
				'".$_SESSION['Usr']['usuario']."',
				'".date('Y-m-d')."'
				);
		";
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->InsertData();
			
		$this->Util()->setError(10129, 'complete', '');
		$this->Util()->PrintErrors();
		return true;	
	}//Save
	public function getListRoles(){
		
		$sql = 'SELECT * FROM roles ORDER BY Title DESC
				';
		$this->Util()->DB()->setQuery($sql);
		$data = $this->Util()->DB()->GetResult();	
		return $data;
		
	}//Enumerate
	public function Enumerate(){
		$sql = 'SELECT 
				*
				FROM roles  where ID>1 AND status="activo"
				ORDER BY Title DESC
				';
		$this->Util()->DB()->setQuery($sql);
		$data = $this->Util()->DB()->GetResult();
		return $data;
		
	}//Enumerate
	
	public function getPermisosRoles($rq=array(),$rolId) 
    {
      $new_array = array();
      $array_perm =  array();

      $sql =  "SELECT PermissionID from rolepermissions where RoleID=".$rolId;
      $this->Util()->DB()->setQuery($sql);
      $array_perm = $this->Util()->DB()->GetResultField("PermissionID"); 
    
      foreach($rq as $key => $value)
      {
       	$car =  $value;
       	if(in_array($value['ID'],$array_perm))
          $car["add"] =  true;
       	else
       	  $car["add"] =  false;

       	$new_array[] = $car;
      }
     return $new_array;
    }
	
	public function permisoSegunRol() 
    {
      $sql =  "SELECT PermissionID from rolepermissions where RoleID=".$this->roleId;
      $this->Util()->DB()->setQuery($sql);
      $array_perm = $this->Util()->DB()->GetResult(); 
	  
	  $newarray =  array();
      foreach($array_perm as $key =>$value){
      	  $newarray[] = $value["PermissionID"];
	  }
      	return $newarray;
    
      

    }
	public function configurarRoles() 
    {
		
		  $sql =  "SELECT * from permissions where permisoId = 0";
		  $this->Util()->DB()->setQuery($sql);
		  $lst = $this->Util()->DB()->GetResult(); 
		  

		  
		  $this->setRoleId($this->id);
		  $lisPermisos = $this->permisoSegunRol();
		  

		  
		  foreach($lst as $key=>$aux){
			  
			  if(in_array($aux["ID"],$lisPermisos)){
				  $lst[$key]["check"] =  "si";
			  }
			  
				$sql =  "SELECT * from permissions where permisoId = ".$aux["ID"]."";
				$this->Util()->DB()->setQuery($sql);
				$lstSecc = $this->Util()->DB()->GetResult();
				
				foreach($lstSecc as $key2=>$aux2){
					
					if(in_array($aux2["ID"],$lisPermisos)){
					  $lstSecc[$key2]["check"] =  "si";
				    }
			  
					
					$sql2 =  "SELECT * from permissions where permisoId = ".$aux2["ID"]."";
					$this->Util()->DB()->setQuery($sql2);
					$lstAccion = $this->Util()->DB()->GetResult();
					$lstSecc[$key2]["acciones"] = $lstAccion;
				}
				
				$lst[$key]["secciones"] =  $lstSecc;				
			  
			  
		  }
		  
		  return $lst;
	}
	
	
	
	 public function asignarRoles(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = 'DELETE  FROM rolepermissions where RoleID = "'.$this->id.'"';
			

	
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();
		
		foreach($_POST["permisos_assign"] as $key=>$aux){
			$sql = "
			INSERT INTO  rolepermissions(
					RoleID,
					PermissionID 
					)
					VALUES (
					'".$this->id."',
					'".$aux."'
					);
			";
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->InsertData();
		}
		
			
		$this->Util()->setError(10129, 'complete', '');
		$this->Util()->PrintErrors();
		return true;	
	}//Save
    public function Delete(){

        if($this->Util()->PrintErrors()){
            return false;
        }
        $sql = 'UPDATE roles SET status="eliminado"  WHERE ID = "'.$this->id.'"';
        $this->Util()->DB()->setQuery($sql);
        $this->Util()->DB()->UpdateData();
        $this->Util()->setError(10129, 'complete', 'El rol se elimino correctamente');
        $this->Util()->PrintErrors();
        return true;
    }//Save


}
?>