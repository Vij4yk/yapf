<?php
Class User extends Model{

    protected $table = 'users';
    public $name;

    public function __construct()
    {
        parent::__construct();
    }

    public function getData(){
        try {
            return $this->getAll();
            /*$sth = $this->db->prepare("SELECT * FROM $this->table");
            $sth->execute();
            return $sth->fetch(\PDO::FETCH_ASSOC);*/
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

}
