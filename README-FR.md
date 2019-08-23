# GESCHOOL

Consulter le **[wiki](https://github.com/lionellea/geschool/wiki)** pour plus d'information.<br>
**Lien**: [https://github.com/lionellea/geschool/wiki](https://github.com/lionellea/geschool/wiki)

## MANUEL D'UTILISATION

1. #### INITIALISATION & PARAMETRAGE
   >Se connecter à l'application en entrant les identifiants

   >Aller dans l'onglet paramètre et enregistrer la nouvelle année scolaire en cours.<br>
   <span style="color:#337ab7">__N.B__:</span> ___Pour chaque nouvelle année éffectuer cette opération.___

   >Aller dans l'onglet <span style="color:#337ab7">_"Classes > Ajouter une classe"_</span> pour enregistrer les différentes classes.<br>
   ___Ici il est question par exemple pour la section francophone d'enregistre 6 classes c'est à dire de la <span style="color:#337ab7">SIL</span> au <span style="color:#337ab7">CM2</span>.___

   >Aller dans l'onglet <span style="color:#337ab7">_"Salles > Ajouter une salle"_</span> enregistrer les différentes salles.<br>
   ___Ici par exemple si vous avez 2 salle pour la <span style="color:#337ab7">SIL</span> la classe sera <span style="color:#337ab7">SIL</span> et les deux saleles <span style="color:#337ab7">SIL 1</span> et <span style="color:#337ab7">SIL 2</span>. Si vous avez une seule SIL</span> pour le moment vous mettez juste <span style="color:#337ab7">SIL</span>.___

2. #### INSCRIPTION DES ELEVES
   >Aller dans l'onglet <span style="color:#337ab7">_"Élèves > Ajouter un élève"_</span> remplir les informations requises et valider l'enregistrement

   >Aller ensuite dans l'onglet <span style="color:#337ab7">_"Salles >  Liste des salles"_</span> au niveau de la liste des salles sélectionner l'icone liste des nons inscrits.<br>
   ___Ici il est question ici de proceder à l'inscription d'un élève à une salle de classe___
   
   >Ensuite choisissez l'élève dont vous souhaite inscrire et cliquer sur l'icon devant ses information pour éffectuer l'inscription
   > * Entrer le montant de l'inscription et valider 
   > * Patienter jusqu'a l'affichage du recu sur forme de pdf puis imprimer le recu

## INSTALLATION && MISE A JOUR
1. INSTALLATION

<!-- Télécharger le projet sur depuis le dépôt **git** puis taper les commandes suivandes<br> -->
>* `git clone https://github.com/lionellea/geschool.git`
>
>* `composer install`
>
>* `php bin/console doctrine:migrations:migrate`

2. MISE A JOUR<br>

>* `git pull`
>
>* `php bin/console doctrine:migrations:migrate`

## MISE EN ROUTE DE L'APPLICATION

>`php bin/console server:start`<br>
>ou<br>
>`symfony server:start --no-tls`