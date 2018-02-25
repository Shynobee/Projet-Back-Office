<?php
class db
{
    private $bdd;
    protected function connect()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=referenciel;charset=utf8', 'root', 'linagora');
            $bdd->setAttribute(PDO::FETCH_ASSOC, PDO::ERRMODE_WARNING);
        } catch (PDOException $e) {
            echo 'Erreur :' . $e->getMessage();
        }
        return $bdd;
    }
    public function request($sql, $args = null)
    {
        $sth = $this->connect()->prepare($sql);
        $sth->execute($args);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
