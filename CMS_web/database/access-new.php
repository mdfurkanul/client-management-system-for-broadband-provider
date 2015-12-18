<?php
	include 'config-db.php';

Class Database extends conDB {
	
	private $dbhost;	private $dbname;			 
	private $dbuser;	private $dbpass;	 
	public $tblPre;		public $statement;
	public $output;
	
	function __construct($live_web){
		
		$this->dbname = $this->database_info['database_name'];		 
		$this->tblPre = $this->database_info['table_prefix'];  
		if($live_web){
			$this->dbhost = $this->database_info['host_name'];
			$this->dbuser = $this->database_info['user_name'];				 
			$this->dbpass = $this->database_info['user_password'];
		}
		else{
			$this->dbhost = $this->database_info['dev_host'];
			$this->dbuser = $this->database_info['dev_user'];				 
			$this->dbpass = $this->database_info['dev_password'];
		}
	}
	
	function QuerySQL($qury,$value){
		try{
			$pdo = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname}",$this->dbuser,$this->dbpass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->statement = $pdo->prepare($qury);
			$this->statement->execute($value);
			$this->output['Exec']=true;
		}
		catch(PDOException $e) { 
			$this->output['Exec']=false;
			$this->output['errMsg']=$e->getMessage();
		} 
	}
	
	function fetchRow($tbl_col_array,$where_string,$value_array){ 
		
		$column_name = ''; 
		$L=sizeof($tbl_col_array)-1;
		$table_name = $tbl_col_array[0];
		$this->output['rowFound']=false;
		for($i=1; $i <= $L; $i++){
			if($i==$L){$column_name.= trim($tbl_col_array[$i]);}
			else{$column_name.= trim($tbl_col_array[$i]).',';}
		}
		
		$query="SELECT ".$column_name." FROM ".$this->tblPre.trim($table_name).' '.trim($where_string).' LIMIT 0,1';
		$this->QuerySQL($query,$value_array);
		$result=$this->statement->fetchAll(PDO::FETCH_ASSOC);
		if($this->output['Exec']){
			if($this->statement->rowCount()==1){
				$this->output['rowFound']=true;
				foreach($result as $row){
					for($i=1; $i <= $L; $i++){
						$this->output[trim($tbl_col_array[$i])]=$row[trim($tbl_col_array[$i])];
					}
				}
			}
		}
		return $this->output;
	}
	
	function fetchTable($tbl_col_array,$where_string,$value_array){
	
		$j=1;
		$column_name = ''; 
		$L=sizeof($tbl_col_array)-1;
		$table_name = $tbl_col_array[0];
		$this->output['rowFound']=false;
		for($i=1; $i <= $L; $i++){
			if($i==$L){$column_name.= trim($tbl_col_array[$i]);}
			else{$column_name.= trim($tbl_col_array[$i]).',';}
		}
		
		$query="SELECT ".$column_name." FROM ".$this->tblPre.trim($table_name).' '.trim($where_string);
		$this->QuerySQL($query,$value_array);
		$this->output['countRow'] = $this->statement->rowCount();
		$result=$this->statement->fetchAll(PDO::FETCH_ASSOC);
		if($this->output['Exec']){
			if($this->output['countRow']>0){
				$this->output['rowFound']=true;
				foreach($result as $row){
					for($i=1; $i <= $L; $i++){
						$this->output[$j][trim($tbl_col_array[$i])]=$row[trim($tbl_col_array[$i])];
					}
					$this->output[$j]['hasValue']=true;
					$j++;
				}
			}
		}
		return $this->output;
	}
	
	function insertRow($tbl_col_array,$value_array){
		
		$column='';
		$col_ind='';
		$L=sizeof($tbl_col_array)-1;
		for($i=1; $i<=$L; $i++){
			$column.=trim($tbl_col_array[$i]);
			$col_ind.='?';
			if($i != $L){
				$column.=','; 
				$col_ind.=',';
			} 
		}
		$query="INSERT INTO ".$this->tblPre.trim($tbl_col_array[0])." (".$column.") VALUES (".$col_ind.")";
		$this->QuerySQL($query,$value_array);
		return $this->output;
	} 
	
	function updateData($tbl_col_array,$where_string,$value_array){
		
		$column='';
		$col_ind='';
		$L=sizeof($tbl_col_array)-1;
		for($i=1; $i<=$L; $i++){
			$column.=trim($tbl_col_array[$i])."=? ";
			if($i != $L){
				$column.=','; 
			} 
		}
		$query="UPDATE ".$this->tblPre.trim($tbl_col_array[0])." SET ".$column." ".$where_string;
		$this->QuerySQL($query,$value_array);
		return $this->output;
	} 
	
	function deleteFrom($where_string,$value_array){  
	
		$query="DELETE FROM ".$this->tblPre.trim($where_string);
		$this->QuerySQL($query,$value_array);
		return $this->output;
	}   
	
	function countRow($table_where_string,$value_array){ 
	
		$query="SELECT * FROM ".$this->tblPre.trim($table_where_string);
		$this->QuerySQL($query,$value_array);
		return $this->statement->rowCount();
	}
}

	global $db;
	$db = new Database(false);	
?> 						  