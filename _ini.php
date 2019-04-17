<?php
// Projet : etapesvideo
$ini = array (
	//Le titre qui s'affiche dans la liste
	'titre' => 'Laravel',

	//Categories sous forme "Catégorie/Sous-Catégorie/..."
	'categorie' => 'Tutoriels vidéo',

	//Un préfixe à mettre devant le titre pour le tri "Cours 01 : "
	'prefixe' => '',

	//Un tableau de liens (étiquette=>url) ou une série de lignes (étiquette=url)
	'liens' => array ('1'=>'http://prof-tim.cstj.qc.ca/cours/web3/etapesvideo/index.html#installation'
),

	//Booléen. Doit-on afficher la source?
	'source' => false,

	//Booléen. Le dossier est-il visible dans la liste? Il reste tout de même accessible.
	'visible' => false,

	//Booléen. Y a-t-il des fichiers à télécharger?
	'fichiers' => false,

	//Booléen. Y a-t-il des fichiers de solution?
	'solution' => false,
);
?>
