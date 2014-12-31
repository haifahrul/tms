<?php
class EWebUser extends CWebUser{
    // hidding property            
    protected $_model;
    
    // getter
    protected function loadUser(){
        if ( $this->_model === null ) {
                $this->_model = User::model()->findByPk($this->id);
        }
        return $this->_model;
    }
    
    // setter
    function getLevel(){
        $user=$this->loadUser();
        if($user)
            return $user->id_akses;
        return 100;
    }
    
}