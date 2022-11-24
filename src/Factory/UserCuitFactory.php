<?php

namespace App\Factory;

use App\Entity\UserCuit;
use App\Repository\UserCuitRepository;
use App\Service\CuitService;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;


/**
 * @extends ModelFactory<UserCuit>
 *
 * @method static UserCuit|Proxy createOne(array $attributes = [])
 * @method static UserCuit[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static UserCuit|Proxy find(object|array|mixed $criteria)
 * @method static UserCuit|Proxy findOrCreate(array $attributes)
 * @method static UserCuit|Proxy first(string $sortedField = 'id')
 * @method static UserCuit|Proxy last(string $sortedField = 'id')
 * @method static UserCuit|Proxy random(array $attributes = [])
 * @method static UserCuit|Proxy randomOrCreate(array $attributes = [])
 * @method static UserCuit[]|Proxy[] all()
 * @method static UserCuit[]|Proxy[] findBy(array $attributes)
 * @method static UserCuit[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static UserCuit[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static UserCuitRepository|RepositoryProxy repository()
 * @method UserCuit|Proxy create(array|callable $attributes = [])
 */
final class UserCuitFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        $cuit = new CuitService();
        $nroCuit = $cuit::cuitNumber();

        return [
//            'id'=> $cuit::cuit(),
            'email' => self::faker()->email(),
            'nombre' => self::faker()->firstName(),
            'apellido' => self::faker()->lastName(),
            'numeroCui' => $nroCuit,
            'tipoCui' => 'cuit',
            'relacionLaboral' => self::faker()->words(1,6),
            'tipoCuenta' => self::faker()->word(),
            'puesto' => self::faker()->jobTitle(),
            'areaSigla' => strtoupper(self::faker()->randomLetter().self::faker()->randomLetter().self::faker()->randomLetter().self::faker()->randomLetter().self::faker()->randomLetter().self::faker()->randomLetter()),
            'areaActiva' => self::faker()->boolean(),
            'domicilioLaboral' => self::faker()->streetAddress(),
            'ramaEstructura' => [],
           'cuit' => $nroCuit,
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(UserCuit $userCuit): void {})
        ;
    }

    protected static function getClass(): string
    {
        return UserCuit::class;
    }
}
