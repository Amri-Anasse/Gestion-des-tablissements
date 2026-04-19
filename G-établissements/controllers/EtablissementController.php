<?php
require_once "models/Etablissement.php";

class EtablissementController {

    // show all etablissements
    public function index() {
        $etablissements = Etablissement::getAll();
        require "views/etablissement/index.php";
    }

    //  afficher form ajouter
    public function create() {
        require "views/etablissement/create.php";
    }
    
    //  insert
    public function store() {
        $nom = $_POST["nom"];
        $ville = $_POST["ville"];
        $adresse = $_POST["adresse"];

        Etablissement::create($nom, $ville, $adresse);

        header("Location: index.php");
        exit();
    }

    //  afficher form edit
    public function edit($id) {
        $etablissement = Etablissement::getById($id);
        require "views/etablissement/edit.php";
    }

    //  update
    public function update($id) {
        $nom = $_POST["nom"];
        $ville = $_POST["ville"];
        $adresse = $_POST["adresse"];

        Etablissement::update($id, $nom, $ville, $adresse);

        header("Location: index.php");
        exit();
    }

    // delete
    public function delete($id) {
        Etablissement::delete($id);

        header("Location: index.php");
        exit();
    }
}
?>