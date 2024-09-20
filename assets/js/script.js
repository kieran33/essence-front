let nom_ville = [
    'Paris', 'Marseille', 'Lyon', 'Toulouse', 'Nice', 'Nantes',
    'Strasbourg', 'Montpellier', 'Bordeaux', 'Lille', 'Rennes', 'Reims',
    'Le Havre', 'Saint-Étienne', 'Toulon', 'Grenoble', 'Dijon', 'Angers',
    'Nîmes', 'Villeurbanne'
];

for (let i = 0; i <= nom_ville.lenght; i++) {
    nom_ville.push(i);
}

// Sélectionner l'élément où les nombres seront affichés
const liste_ville = document.getElementById("affichage_ville");
let index = 0;

        // Utiliser setInterval pour afficher chaque nombre un par un toutes les secondes
        let interval = setInterval(function() {
          // Afficher le nombre actuel
          liste_ville.placeholder = nom_ville[index];
        
          // Passer au nombre suivant
          index++;
        
          // Si tous les nombres ont été affichés, arrêter l'intervalle
          if (index >= nom_ville.length) {
              index = 0;
          }
        }, 3000); // Affichage toutes les 3000 ms (3 seconde)