# Analyse du site XIWO.fr (Existant)

## 1. Structure de l'offre
Le FAI (Fournisseur d'Accès Internet) XIWO propose principalement des offres Internet (Fibre) et Téléphonie/TV.
Les offres principales identifiées sont :
- **SMART+** : Débit jusqu'à 1 Gbit/s. Tarif d'appel : 39,99€ / mois (pendant 2 mois, puis 49,99€/mois).
- **UPMAX** : Débit jusqu'à 5 Gbit/s. Tarif d'appel : 49,99€ / mois (pendant 2 mois, puis 59,99€/mois).
- **VIVA** (Mentionnée dans la page) : Jusqu'à 1 Gbit/s, 39,99€/mois.
- **MAXX** (Mentionnée dans la page) : Jusqu'à 5 Gbit/s, 49,99€/mois.

## 2. Architecture Régionale
Une composante majeure du site actuel est la ségrégation géographique. Les offres et services dépendent de la zone de résidence de l'utilisateur.
Les zones gérées sont :
- Hexagone
- Guadeloupe
- Martinique
- Guyane Française
- Saint Martin
- Saint Barthélémy

**Implication technique pour le nouveau site :** Il est nécessaire d'avoir un Custom Post Type (CPT) `Offres` lié à une Taxonomie (catégorie) `Regions` pour permettre à l'administrateur de définir des prix, des offres et des disponibilités spécifiques à chaque zone.

## 3. Services annexes
Le site présente 3 piliers de services :
- Internet (XIWO Box)
- Télévision (XIWO TV)
- Assistance (XIWO Assis)

## 4. Outils et Liens fonctionnels
Le site propose des actions directes pour les utilisateurs :
- Inscription (subscribe.xiwo.fr)
- Espace Abonné
- Contact

## 5. Vision pour la refonte "IA 2030"
Le site actuel a un design classique de fournisseur d'accès. La refonte visera une esthétique "Cyberpunk / Tech 2030" :
- **Dominance** : Dark mode (Noir profond / Gris charbon).
- **Accent** : Vert Néon (#9ABA64) pour les boutons, bordures, et textes importants.
- **UI** : Glassmorphism (Fonds semi-transparents avec effet de flou en arrière-plan) pour séparer les blocs d'offres du fond sombre.
- **Interactions** : Animations d'apparition, effets de lueur (glow) au survol.
