<?php

namespace Database\Seeders;

use App\Models\Recette;
use Illuminate\Database\Seeder;

class RecetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Données des recettes
        $recettes = [
            [
                'nom' => 'Gâteau au Chocolat',
                'description' => 'Un délicieux gâteau au chocolat pour satisfaire votre envie de sucreries.',
                'ingredients' => 'Farine, sucre, cacao en poudre, œufs, lait, levure, chocolat',
                'etapes' => '1. Mélanger les ingrédients secs. 2. Ajouter les ingrédients liquides. 3. Cuire au four à 180°C pendant 30 minutes.'
            ],
            [
                'nom' => 'Soupe de Légumes',
                'description' => 'Une soupe réconfortante pleine de légumes frais.',
                'ingredients' => 'Carotte, pomme de terre, courgette, oignon, ail, bouillon de légumes, sel, poivre',
                'etapes' => '1. Faire revenir l\'oignon et l\'ail. 2. Ajouter les légumes coupés et le bouillon. 3. Cuire pendant 20 minutes.'
            ],
            [
                'nom' => 'Poulet Rôti',
                'description' => 'Poulet juteux rôti avec des épices fraîches.',
                'ingredients' => 'Poulet entier, citron, ail, romarin, sel, poivre, huile d\'olive',
                'etapes' => '1. Assaisonner le poulet avec les ingrédients. 2. Rôtir au four à 200°C pendant 1 heure.'
            ],
            [
                'nom' => 'Purée de Pommes de Terre',
                'description' => 'Purée de pommes de terre crémeuse faite avec du beurre et du lait.',
                'ingredients' => 'Pommes de terre, beurre, lait, sel, poivre',
                'etapes' => '1. Cuire les pommes de terre jusqu\'à ce qu\'elles soient tendres. 2. Écraser les pommes de terre et mélanger avec les autres ingrédients.'
            ],
            // Ajoutez plus de recettes au besoin
        ];

        // Insérer les données dans la table
        foreach ($recettes as $recette) {
            Recette::create($recette);
        }
    }
}
