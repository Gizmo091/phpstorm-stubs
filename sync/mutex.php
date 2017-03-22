namespace \ {
  class SyncMutex {
    /**
    * Construit un nouvel objet SyncMutex
    * @param string $name : Le nom du mutex s'il s'agit d'un objet mutex nommé.
    *   Note:
    *   Si le nom existe déjà, il doit être capable d'être ouvert par l'utilisateur courant exécutant le processus, ou bien une exception sera lancée avec le message d'erreur correspondant.
    * @return SyncMutex Le nouvel objet SyncMutex. Une exception est lancée si le mutex ne peut être créé ou ouvert.
    */
    public function __construct ( string $name ) {}
    
    /**
    * Obtient un verrou exclusif sur un objet SyncMutex. Si le verrou est déjà acquis, alors cette méthode va incrémenter le compteur interne.
    * @param int $wait : Le nombre de millisecondes à attendre pour l'obtention du verrou exclusif. Une valeur -1 signifie que l'on attend indéfiniement.
    * @return bool Un booléen ayant comme valeur TRUE si le verrou est obtenu, FALSE sinon.
    */
    public function lock ( int $wait ):bool {}
    
    /**
    * Décrémente le compteur interne d'un objet SyncMutex. Lorsque le compteur interne atteint zéro, le verrou actuel de l'objet est libéré.
    * @param bool $all : Spécifie si l'on doit ou non définir le compteur interne à zéro et donc, libérer le verrou.
    * @return bool Un booléen valant TRUE si l'opération de déverrouillage est un succès, FALSE sinon.
    */
    public function unlock ( bool $all = false ) :bool {}
  }

}
