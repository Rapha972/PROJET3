<?php
class commentaire{
private $_id
private $_idArticle
private $_auteur
private $_contenu
private $_date
    

// création des getters
    
public function getId()
{
 return $this->_id; 
}
  
    
public function getIdArticle()
{
 return $this->_titre; 
    
public function getAuteur()
{
 return $this->_auteur; 
}
}

public function getContenu()
{
 return $this->_contenu; 
    
}

public function getDate()
{
 return $this->_date; 
        
}
    
// création des setters fonction set
    
public function setId($id)
{
  if(isset($id=int($id)&& $id>0))
      $this->_id=$id;
  }
      
    
}