<?php
class ModelCustomCertificates extends Model
{
    public function Certificates()
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "category_description"; 
        $implode = array();
        $query = $this->db->query($sql);
        return $query->rows;    
    }
}
?>