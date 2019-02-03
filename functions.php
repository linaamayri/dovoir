<?php
require __DIR__ . '/monsterclasse.php';

try{//assaye a contect  dans le database
    $Bdd=new PDO('mysql:host=localhost;dbname=monsters;charset=utf8','lina','lina');//conect a database
    
    }catch(Exception $e){
        die('erreur: '.$e->getMessage());
    }
function getMonsters(){
    try{
        $Bdd=new PDO('mysql:host=localhost;dbname=monsters;charset=utf8','lina','lina');
        
        }catch(Exception $e){
            die('erreur: '.$e->getMessage());
        }
$statement = $Bdd->prepare('select * from monsters');
$statement->execute();
$monsters = $statement->fetchAll();
$data=array();
foreach($monsters as $monster){
    $monster1 = new Monsters();
    $monster1->setName($monster['name']);//enregestre l'information 
    $monster1->setStrength($monster['strength']);
    $monster1->setLife($monster['life']);
    $monster1->setType($monster['type']);
    $data[] = $monster;
}
return $data;
$response->closeCursor();

}
 
        
/*function getMonsters()
{
    return [
        [
            'name' => 'Domovoï',
            'strength' => 30,
            'life' => 300,
            'type' => 'water'
        ],
        [
            'name' => 'Wendigos',
            'strength' => 100,
            'life' => 450,
            'type' => 'earth'
        ],
        [
            'name' => 'Thunderbird',
            'strength' => 400,
            'life' => 500,
            'type' => 'air'
        ],
        [
            'name' => 'Sirrush',
            'strength' => 250,
            'life' => 1500,
            'type' => 'fire'
        ],
    ];
}*/
/*function getMonsters1(){
    $monster1=new Monsters();
    $monster1->setName('Domovoï');
    $monster1->setStrength('30');
    $monster1->setLife('300');
    $monster1->setType('water');
    $monster2=new Monsters();
    $monster2->setName('Wendigos');
    $monster2->setStrength('100');
    $monster2->setLife('450');
    $monster2->setType('earth');
    $monster3=new Monsters();
    $monster3->setName('Thunderbird');
    $monster3->setStrength('400');
    $monster3->setLife('500');
    $monster3->setType('air');
    $monster4=new Monsters();
    $monster4->setName('Sirrush');
    $monster4->setStrength('250');
    $monster4->setLife('1500');
    $monster4->setType('fire');

    $montable=array($monster1,$monster2,$monster3,$monster4);
    return $montable;






}*/

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];
    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }
    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }
    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}