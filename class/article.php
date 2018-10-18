<?php
class article{
private $_id
private $_titre
private $_contenu
private $_date

// création des getters
    
public function getId()
{
 return $this->_id; 
}
    
public function getTitre()
{
 return $this->_titre; 
}

public function getContenu()
{
 return $this->_contenu; 
    
}

public function getDate()
{
 return $this->_date; 
        
}
    
// création des setters
    
public function setId($id)
{
  if(isset($id=int($id)&& $id>0))
      $this->_id=$id;
  }
      
    
}