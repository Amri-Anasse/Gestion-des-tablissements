<?php
require_once "models/Etablissement.php";
require_once "controllers/EtablissementController.php";

$action = isset($_GET["action"]) ? $_GET["action"] : "index";

$controller = new EtablissementController();

switch ($action) {
    case "index":
        $controller->index();
        break;

    case "create":
        $controller->create();
        break;

    case "store":
        $controller->store();
        break;

    case "edit":
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        $controller->edit($id);
        break;

    case "update":
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        $controller->update($id);
        break;

    case "delete":
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        $controller->delete($id);
        break;

    default:
        echo "Page non trouvée";
}
?>