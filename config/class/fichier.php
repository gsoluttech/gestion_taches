<?php

namespace config\class\fichier;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use Exception;
use PDO;
use PDOException;
use PDOStatement;

class Files 
{
    private $fileName;
    private $path_F;
    private $idUser;
    private $idProject;

    public function __construct($fileName, $path_F, $idUser, $idProject){
        $this->fileName = $fileName;
        $this->path_F = $path_F;
        $this->idUser = $idUser;
        $this->idProject = $idProject;
    }


    public function addFile() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {
                $req = $bdd->prepare("INSERT INTO tfichier (nomFichier, cheminDacces, idUser, idProjet) VALUES (:nomFichier, :cheminDacces, :idUser, :idProjet)");

                $req->bindParam(':nomFichier', $this->fileName);
                $req->bindParam('cheminDacces', $this->path_F);
                $req->bindParam('idUser', $this->idUser);
                $req->bindParam('idProjet', $this->idProject);

                if ($req->execute()) {
                    return 'Fichier ajouté avec succès';
                } else {
                    return 'Une erreur s\'est produite lors de l\'ajout du fichier';
                }
            }
        } catch (PDOException $e) {
            return 'Une erreur s\'est produite ' . $e->getMessage();
        } catch (Exception $exception) {
            return 'Une erreur s\'est produite ' . $exception->getMessage();
        }
    }

    public function deleteFile() {
        try {
            $bdd = Database\db_connection();
        } catch (Exception $exc) {
            return 'Une erreur s\'est produite lors de la suppression du fichier' . $exc->getMessage();
        }
    }
}