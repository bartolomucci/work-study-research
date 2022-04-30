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
}