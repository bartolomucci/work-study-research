<?php

class AgenceManager extends Manager
{
    CONST TABLE = 'agence';

    public function getAllAgences()
    {
        $sql = 'SELECT * FROM ' . self::TABLE;
        $req = $this->getPdo()->query($sql);
        $req->execute();

        return $req->fetchAll();
    }

    public function createAgence(string $name, string $url, string $email, string $phone, string $country, string $city, string $address, string $zip)
    {
        $sql = 'INSERT INTO ' . self::TABLE . ' (name, url, email, phone, country, city, address, zip) VALUES (:name, :url, :email, :phone, :country, :city, :address, :zip)';
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'name' => $name,
            'url' => $url,
            'email' => $email,
            'phone' => $phone,
            'country' => $country,
            'city' => $city,
            'address' => $address,
            'zip' => $zip,
        ]);
    }

    public function getAgencebyId(int $id)
    {
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE id = :id';
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'id' => $id,
        ]);

        return $req->fetch();
    }


    public function updateById(string $name, string $url, string $email, string $phone, string $country, string $city, string $address, string $zip, int $id)
    {
        $sql = 'UPDATE ' . self::TABLE . ' SET name = :name, url = :url, email = :email, phone = :phone, country = :country, city = :city, address = :address, zip = :zip WHERE id = :id';
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'name' => $name,
            'url' => $url,
            'email' => $email,
            'phone' => $phone,
            'country' => $country,
            'city' => $city,
            'address' => $address,
            'zip' => $zip,
            'id' => $id,
        ]);
    }

    public function deleteById(int $id)
    {
        $sql = 'DELETE FROM ' . self::TABLE . ' WHERE id = :id';
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'id' => $id,
        ]);
    }

    public function updateContactbyId(int $id, string $is_contacted)
    {
        $sql = 'UPDATE ' . self::TABLE . ' SET is_contacted = :is_contacted WHERE id = :id';
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'is_contacted' => $is_contacted,
            'id' => $id,
        ]);
    }

}