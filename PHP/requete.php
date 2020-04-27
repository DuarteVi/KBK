<?php
    
    require 'config.php';

    class Employe  {
    
        private $nom = "";
        private $prenom = "";
        private $fonction = "";
        private $naissance = "";
        private $photo = "";
        private $courriel = "";
        private $tel = "";
        
        public function getNom() {
            return $this->nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }
        
        public function getFonction() {
            return $this->fonction;
        }

        public function getJour() {        
            $jour = $this->naissance[8]."".$this->naissance[9]; 
            return $jour;
        }

        public function getMois() {
            $mois = $this->naissance[5]."".$this->naissance[6];
            return $mois;
        }

        public function getAnnee() {
            $annee = $this->naissance[0]."".$this->naissance[1]."".$this->naissance[2]."".$this->naissance[3];
            return $annee;
        }

        public function getPhoto() {
            return $this->photo;
        }

        public function getCourriel() {
            return $this->courriel;
        }

        public function getTel() {
            return $this->tel;
        }
        
                
        function __construct($pnom,$pprenom,$pfonction,$pnaissance,$pphoto,$pcourriel,$ptel){
            //constructeur
            $this->nom = $pnom ;
            $this->prenom = $pprenom ;
            $this->fonction = $pfonction ;
            $this->naissance = $pnaissance ;
            $this->photo = $pphoto ;
            $this->courriel = $pcourriel ;
            $this->tel = $ptel ;
        
        }
    }



    class Produit  {
    
        private $nom = "";
        private $description = "";
        private $fabriquant = "";
        private $prix = "";
        private $photo = "";
        
        public function getNom() {
            return $this->nom;
        }

        public function getDescription() {
            return $this->description;
        }
        
        public function getFabriquant() {
            return $this->fabriquant;
        }

        public function getPrix() {
            return $this->prix;
        }

        public function getPhoto() {
            return $this->photo;
        }
                
        function __construct($pnom,$pdescription,$pfabriquant,$pprix,$pphoto){
            //constructeur
            $this->nom = $pnom ;
            $this->description = $pdescription ;
            $this->fabriquant = $pfabriquant ;
            $this->prix = $pprix ;
            $this->photo = $pphoto ;
        
        }
    }



    //Retourne tous les employés
    function listeEmploye(){
        global $database;
        $records=$database->select("employes", [
            "nom",
            "prenom",
            "fonction",
            "datenaissance",
            "photo",
            "courriel",
            "telephone"
        ]);
        
        //On crée un tableau d'objet Employe correspondant aux éléments retournés par $records
        $employes = array();
        foreach ( $records as $empl)
        {
            array_push($employes,(new Employe(
                $empl['nom'],
                $empl['prenom'],
                $empl['fonction'],
                $empl['datenaissance'],
                $empl['photo'],
                $empl['courriel'],
                $empl['telephone']
            )));
        }

        return($employes);
    }



    //Retourne tous les produits
    function listeProduit(){
        global $database;

        $records=$database->select("produits", [
            "nom",
            "description",
            "fabricant",
            "prix",
            "photo"
           
        ]);
    
        //On crée un tableau d'objet Produit correspondant aux éléments retournés par $records
        $produits = array();
        foreach ( $records as $prod)
        {
            array_push($produits,(new Produit(
                $prod['nom'],
                $prod['description'],
                $prod['fabricant'],
                $prod['prix'],
                $prod['photo']
            )));
        }

        return($produits);
    }



    //Retourne tous les élements compris entre les positions 'début' et 'fin' dans la liste total des produits
    function listeProduitInterval($debut,$fin){

        $produits = listeProduit();

        if ( (sizeof($produits)-1) < ($debut-1) ){
            return;
        }

        $intervalProd  = array();
        //On récupère les éléments des positions [début] à [fin] du tableau $produits
        //Et on les enregistre dans le nouveau tableau $intervalProd
        foreach (range( ($debut-1) , min(($fin-1),(sizeof($produits)-1) )) as $number){
            array_push($intervalProd, $produits[$number]);
        }

        return ($intervalProd);
    }



    //Retourne les 2 plus récents produits de la BDD sous forme de tableau
    function listeProduitPhare(){
        global $database;

        //On récupère le produit le plus récent
        $max = $database->max("produits", "id");
        //On récupère le produit le 2e plus récent
        $max2 = $database->max("produits", "id", [
            "id[!]" => $max
        ]);

        //S'il n'y a qu'un seul élément dans la BDD
        if ( empty($max2) )
        {
            $max2  = 0;
        }

        //On demande des récupérer les deux produits les plus récents
        $records=$database->select("produits", [
            "nom",
            "description",
            "fabricant",
            "prix",
            "photo"],
            [
                "id[>=]" => $max2
            ]);

        //On déclare le tableau de retour comme initialement vide
        $pphare = array();
        //Si on a trouvé 2 éléments dans la requête on enregistre
        if ( isset($records[1]))
        {
            $pphare = array(new Produit(
                        $records[1]['nom'],
                        $records[1]['description'],
                        $records[1]['fabricant'],
                        $records[1]['prix'],
                        $records[1]['photo']
                        ),
                        new Produit(
                        $records[0]['nom'],
                        $records[0]['description'],
                        $records[0]['fabricant'],
                        $records[0]['prix'],
                        $records[0]['photo']
                        )
            );
        }
        //Sinon si a trouvé qu'1 élément dans la requête on enregistre
        else if ( isset($records[0]))
        {
            $pphare = array(new Produit(
                $records[0]['nom'],
                $records[0]['description'],
                $records[0]['fabricant'],
                $records[0]['prix'],
                $records[0]['photo']
            ));
        }

        //On returne le tableau
        return($pphare);
    }
    
?>