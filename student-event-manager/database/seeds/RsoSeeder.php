<?php

use Illuminate\Database\Seeder;
use App\Models\Rso;

class RsoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rsos = [
            [
                'admin_id' => 1,
                'description' => 'Froakie is based on a frog. Its bubbling white foam is a reference to frog foam nests, created by some species such as the Tungara frog and grey foam-nest tree frog to protect eggs. Froakie\'s foam resembles a "backpack" of sorts, and has also been used in the anime as a makeshift hood, which is more than likely a reference to dorobō (burglars or thieves). In Japanese folklore and culture, dorobō use furoshiki cloth bags to hold stolen goods and mask their identity, referenced in Froakie\'s usage of its foam. In the older games, the Burglar Trainer class took on the appearance of dorobō. Considering its evolutions, its characteristics, as well as its association with thievery, Froakie may also be based on a ninja.',
                'name' => 'Pokemon club'
            ],
            [
                'admin_id' => 2,
                'description' => 'Espeon is a quadruped, mammalian Pokémon with slender legs and dainty paws. It is covered in fine, lilac fur. This velvety fur is sensitive for Espeon to sense minute shifts in the air, thus allowing it to predict the weather. Its ears are large, and it has purple eyes with white pupils. There are tufts of fur near its eyes, and a small, red gem embedded in its forehead. The gem boosts the psychic powers that it gained to protect its Trainer from harm. It also has a thin, forked tail that quivers when it predicts its opponent\'s moves. Espeon is rare in the wilderness, and is more commonly found in urban areas.',
                'name' => 'Poor People: the club'
            ],
        ];
        
        foreach ($rsos as $rso) {
            Rso::create(array(
                'admin_id' => $rso['admin_id'],
                'description' => $rso['description'],
                'name' => $rso['name']
            ));
        }
    }
}
