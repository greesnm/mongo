<?php
class ModelCustomShop extends Model
{
    public function Shop()
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "category_description"; 
        $implode = array();
        $query = $this->db->query($sql);
        return $query->rows;    
    }
}
?>