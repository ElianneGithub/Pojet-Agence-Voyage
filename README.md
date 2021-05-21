# Projet-Agence-Voyage

Le projet Agence- Voyage est un projet web de construction d'un site internet proposant des services de d'hébergement, de loisirs et une billeterie proposant des tickets vers des destinations touristiques 

Tout d’abord, le site est composé de 6 rubriques qui sont les suivantes :
« Destinations », « Billets », « Hôtels », « Contactez-nous » et « Espaces Abonné ». Sur la page d’accueil , nous proposons quelques articles de voyage qui peuvent intéresser les potentiels clients et donner un aperçu des services que nous proposons.
Afin de nous assurer que l’aspect du site soit agréable et les services proposés soient attractifs pour les clients nous avons construit le site suivant une forme d’esthétisme qui correspond au thème du voyage.
Pour commencer, dans la rubrique « Destinations », nous proposons des articles réalisés par nos clients dans lesquels ils partagent leurs expériences, ce qui va permettre aux nouveaux clients d’avoir plus confiance en notre site.
Dans la rubrique « Hôtels », nous proposons des hébergements dans hôtels à des prix compétitifs.
De même, dans la rubrique « Billets », nous disposons d’un formulaire de recherche de billets de voyages en fonctions des différents moyens de transports tels que l’avion, le train et le bus, toujours à des prix plus faible par rapport aux autres sites de voyage.
Ensuite dans la rubrique « Espace Abonnée », nous avons un formulaire d’inscription afin que le client puisse s'inscrire sur le site, ainsi il pourra recevoir par courriel électronique des offres de billets de voyages et autres services que nous proposons. Enfin, la rubrique « Contactez-nous », va permettre au client grâce à un formulaire de nous contacter en cas de problème.
En bas de page nous avons un compartiment où nous avons une petite présentation du site mais aussi toutes les mentions légales : chartes de confidentialité, conditions générales d’utilisation...


Premièrement, chaque rubrique a des fonctions différentes. Afin de rendre très dynamique tous les rubriques, on s’est servie de JavaScript. 
Par exemple, dans la page d’accueil, pour défiler les images vers la gauche à chaque fois que l’utilisateur clique sur le bouton « 1 » et vers la droite à chaque fois que l’utilisateur clique sur le bouton « 2 », de même, dans la rubrique « Billets », le bouton inverse permet d’inverser les valeurs de la ville de départ et de la ville d’arrivée, les boutons radios sont automatiquement sélectionnés en fonction de la ville de départ et d’arrivée entrées par le client ( donc il s’agit d’une condition) 
et le bouton rechercher permet d’emmener le client vers une autre page ,ou il peut trouver des billets de voyages très variés, en se basant des valeurs entrées par le clients ( c’est une condition aussi). Sur la même page, l’image de la calculatrice facilite le calcul du prix de leurs billets, plus précisément, à chaque fois que le client passe la souris sur l’image, le navigateur va demander au client, 
s’il souhaite de savoir le prix total du billet. S ’il est d’accord, le navigateur demandera le prix du billet et le nombre de passagers afin d’afficher le prix total du billet au client. Donc il s’agit d’une fonction qui fonctionne à chaque fois le client clique sur l’image. Ensuite, dans la rubrique, Espace abonnée, dans le but de vérifier si les valeurs entrées par l’utilisateur sont correctes ou non (par exemple l’email, la confirmation du l’email, la composition du mot de passe, c’est-à- dire, 
on peut choisir si le mot de passe doit être composé que de lettres ou des chiffres ou tous les deux à la fois mais aussi la taille du mot de passe, la confirmation du mot de passe..), on utilise une fonction qui permettra de vérifier chaque case ( dans ce cas- là, on utilisera la boucle de condition). Enfin, la dernière rubrique « Contactez-nous » fonction à peu près de la même manière mais on peut ajouter une condition supplémentaire plus précisément, on peut définir la taille maximum du message que le client va nous envoyer.

L’objectif est de rendre le site le plus dynamique possible.
Tout d’abord au niveau de l’inscription, l’objectif sera de rendre l’inscription obligatoire pour le client avant d’accéder à chacun des services notamment lors de la validation de son choix. Une fois recueilli les données du client : nom, email, adresse... elles seront enregistrées dans une base de donnée. À chaque prochaine connexion, il sera demandé au client de rentrer ses identifiants de connexion, s’ils ils sont corrects et enregistrés dans notre base de données, alors il aura accès aux services. 
Dans le cas contraire il lui sera proposé une réinitialisation de ses identifiants par un lien qui lui sera envoyé dans une boite email qu’il devra rentrer.
Grâce aux email recueillis, nous pouvons envoyer de manière automatisé des propositions d’offres aux clients.


Au niveau de la barre de recherche, il s’agira de la rendre opérationnelle. Lorsqu’un client entre un mot clé lié à un service proposé tels : billet, Londres... les résultat de la recherche dirigé vers une page où sont listés tous les produits proposés liés à la recherche entrée. 
Si le mot entré est par exemple Londres, alors le résultat sera une liste de tout les billets de transport en direction de Londres, les hotels situés à Londres et les articles parlant de Londres.
Si la recherche entrée ne correspond à aucun élément alors le résultat sera une page affichant une erreur.
La création d’un panier va également rendre le site plus efficace.
À chaque fois que le client choisie un produit ou un service, il est automatiquement ajouté à un panier un tableau est crée dans base de donnée qui correspond au client dans lequel est répertorié tous les produits et les services ajoutés à son panier.
De même à chaque fois que le client retire un élément de son panier, alors il est également retiré du tableau de sa base de donnée.
Si le panier est abandonné et non validé, un message devra s’afficher indiquant à l’utilisateur si il veut valider ou non son panier.
Au niveau de la recherche d’hotel le but est de construire un formulaire, le client aura à y renseigner ses choix : le pays ou la région, la fourchette de prix...en fonction de ses choix, il lui sera proposé les hotels qui correspondent le mieux à ses préférences.
Pareil pour les billets : le client devra remplir un formulaire où il indique ses préférences : date de départ, date d’arrivé, moyen de transport, fourchette de prix... En fonction de ces informations il lui sera proposé une liste de billets qui correspondent à ses choix.
Les prix de billets augmentent en fonction de l’âge : enfant , jeune, adulte et senior, donc il s’agira d’appliquer une augmentation ou une réduction automatique du prix
Dans le cas où le client souhaite annuler sa reservation, il sera possible d’effacer les produits et les services choisie dans la base de données.
Afin de payer ses reservations, nous avons pour but de créer un formulaire de paiement. Une fois les informations bancaires entrées est validées, elles sont automatiquement effacées de la base de donnée et une facture est directement émise pour le client contenant toute les informations concernant ses reservations : départ, destination, reservation d’hébergement, billet, montant de la reservation...
Nous voulons également rendre possible l’application de réductions automatiques si le client est éligible à la réduction : si le montant de sa reservation excède un certain montant, si il possède un coupon de réduction ou une carte de fidélité valide...
Enfin l’utilisateur pourra émettre un avis sur les services qui lui ont été proposé grâce à une rubrique commentaires.
