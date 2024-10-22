<?php
class ManagerMariage{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function enregistrerPersonne(Personne $perso){
        $requete = "INSERT INTO personne SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance, contact = :contact, email = :email, sexe = :sexe, nature = :nature";
        
        $result = $this->db->prepare($requete);
        $result->bindValue(':nom', $perso->nom);
        $result->bindValue(':prenom', $perso->prenom);
        $result->bindValue(':date_naissance', $perso->date_naissance);
        $result->bindValue(':contact', $perso->contact);
        $result->bindValue(':email', $perso->email);
        $result->bindValue(':sexe', $perso->sexe);
        $result->bindValue(':nature', $perso->nature);

        $result->execute();

        $idPerso = $this->db->lastInsertId();
        return $this->getPersonne($idPerso);
    }

    public function getPersonne($id){
        $requete = "SELECT * FROM personne WHERE identifiant = :id";

        $result = $this->db->prepare($requete);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $donne = $result->fetch();
        $perso = null;
        if($donne){
            $perso = new Personne($donne);
        }

        return $perso;
    }

    public function enregistrerDocument(Documents $document){
        $requete = "INSERT INTO documents_perso SET cni = :cni, acteMariage = :acteM, acteNaissance = :acteN, doc_perso = :doc";

        $result = $this->db->prepare($requete);
        $result->bindValue(':cni', $document->cni);
        $result->bindValue(':acteN', $document->acteNaissance);
        $result->bindValue(':acteM', $document->acteMariage);
        $result->bindValue(':doc', $document->doc_perso);

        $result->execute();

        $idDoc = $this->db->lastInsertId();
        return $this->getDocuments($idDoc);
    }

    public function getDocuments($id){
        $requete = "SELECT * FROM documents_perso WHERE id_document = :id";

        $result = $this->db->prepare($requete);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $donne = $result->fetch();
        $document = null;
        if($donne){
            $document = new Documents($donne);
        }

        return $document;
    }

    public function addActeMariage(ActeMariage $acte){
        // print_r($acte);
        // exit;
        $requete = "INSERT INTO acte_mariage SET conjoin = :conjoin, conjointe = :conjointe,
         temoin_conjoin = :temoin_conjoin, temoin_conjointe = :temoin_conjointe, pere_conjoin = :pere_conjoin,
          pere_conjointe = :pere_conjointe, mere_conjoin = :mere_conjoin, mere_conjointe = :mere_conjointe, 
          nom_maire = :nom_maire, date_etablissement = :date_etablissement";

        $result = $this->db->prepare($requete);
        $result->bindValue(':conjoin', $acte->conjoin, PDO::PARAM_INT);
        $result->bindValue(':conjointe', $acte->conjointe, PDO::PARAM_INT);
        $result->bindValue(':temoin_conjoin', $acte->temoin_conjoin, PDO::PARAM_INT);
        $result->bindValue(':temoin_conjointe', $acte->temoin_conjointe, PDO::PARAM_INT);
        $result->bindValue(':pere_conjoin', $acte->pere_conjoin, PDO::PARAM_INT);
        $result->bindValue(':pere_conjointe', $acte->pere_conjointe, PDO::PARAM_INT);
        $result->bindValue(':mere_conjoin', $acte->mere_conjoin, PDO::PARAM_INT);
        $result->bindValue(':mere_conjointe', $acte->mere_conjointe, PDO::PARAM_INT);
        // $result->bindValue(':nom_maire', '');
        // $result->bindValue(':date_etablissement', );
        $result->bindValue(':nom_maire', $acte->nom_maire);
        $result->bindValue(':date_etablissement', $acte->date_etablissement);

        $result->execute();

        $idActe = $this->db->lastInsertId();
        return $this->getActeMariage($idActe);
    }

    public function getActeMariage($id){
        $requete = "SELECT * FROM acte_mariage WHERE identifiant = :id";

        $result = $this->db->prepare($requete);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $donne = $result->fetch(PDO::FETCH_ASSOC);
        $acte = null;
        if($donne){
            $acte = new ActeMariage($donne);
        }

        return $acte;
    }

    // Récupérer les infos
    public function getHistoriqueMariage(){
        $sql = 'SELECT * FROM acte_mariage';
        $nv = $this->db->query($sql);
        $tab=$nv->fetchAll();
        $tabActe = null;
        if($tab){
            foreach($tab as $val){
                $tabActe[] = new ActeMariage($val);
            }
        }
        return $tabActe;
    
    }
    public function recuperInfoActeDeMariage($statut){
        $sql = 'SELECT * FROM acte_mariage WHERE statut=:statut';
        $nv = $this->db->prepare($sql);
        $nv->bindValue(':statut',$statut);
        $nv->execute();

        $tab=$nv->fetchAll();
        $tabActe = null;
        if($tab){
            foreach($tab as $val){
                $tabActe[] = new ActeMariage($val);
            }
        }
        return $tabActe;
    
    }

    public function modifierEtatActeMariage($id, $statut) {
        $sql = "UPDATE acte_mariage SET statut = :statut WHERE identifiant = :id";
        $result = $this->db->prepare($sql);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->bindValue(':statut', $statut);
        $result->execute();
    }


    // Récupération du nombre de mariage Approuvé

    public function nombreMariageParStatut($stat){
        $requete = "SELECT count(*) FROM acte_mariage WHERE statut = :stat";
        $result = $this->db->prepare($requete);

        $result->bindValue(':stat', $stat);
        $result->execute();

        return $result->fetch(PDO::FETCH_COLUMN);
    }

    public function countMariageEnAttente(){
        $stat = "en attente";
        $requete = "SELECT count(*) FROM acte_mariage WHERE statut = :stat";
        $result = $this->db->prepare($requete);

        $result->bindValue(':stat', $stat);
        $result->execute();

        return $result->fetch(PDO::FETCH_COLUMN);
    }


    public function searchDocument($idPersonne){
        $requete = "SELECT * FROM documents_perso WHERE doc_perso = :id";

        $result = $this->db->prepare($requete);
        $result->bindValue(':id', $idPersonne, PDO::PARAM_INT);
        $result->execute();

        return new Documents($result->fetch());
    }
}