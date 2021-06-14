<?php
namespace Step\Acceptance;

/**
 * StepObject для генерации  Юзеров
 */
class CreateUserStep extends \AcceptanceTester
{
    /**
     * Созданиe пользователя
     */
    protected $data;

    protected $ownerName;

    /**
     * Массив  для создания карточки Юзера
     */
    public function createRandomUserData(string $ownerName)
    {
        $faker = $this->getFaker();
        $this->data = [
            "job"   => $faker->company,
            "superhero" => $faker->boolean(),
            "skill" => $faker->word,
            "email" => $faker->email,
            "name" => $faker->name,
            "DOB" => $faker->date("Y-m-d"),
            "avatar" => $faker->imageUrl(),
            "canBeKilledBySnap" => $faker->boolean(),
            "created_at" => $faker->date("Y-m-d"),
            "owner" => $ownerName,
        ];
    }

    /**
     * Отправляет данные о количестве созданных карточек User в базу 
     */
    public function sendRandomUsers(int $numberOfUsers) 
    {
        $faker = $this->getFaker();
        $this->ownerName = 'Mr/Mss '.$faker->name;

        for ($n = 0; $n < $numberOfUsers; $n++) 
        {
            $this->createRandomUserData($this->ownerName);
            var_dump($this->data);
            $this->haveInCollection('people', $this->data);
        }

        return $this->ownerName;
    }
}