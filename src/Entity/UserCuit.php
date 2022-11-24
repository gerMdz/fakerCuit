<?php

namespace App\Entity;


use App\Repository\UserCuitRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 *
 * @ORM\Entity(repositoryClass=UserCuitRepository::class)
 */
class UserCuit
{
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="doctrine.uuid_generator")
     */
    private ?Uuid $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apellido;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $numeroCui;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tipoCui;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $relacionLaboral;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tipoCuenta;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $puesto;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $areaSigla;

    /**
     * @ORM\Column(type="boolean")
     */
    private $areaActiva;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domicilioLaboral;

    /**
     * @ORM\Column(type="json")
     */
    private $ramaEstructura = [];

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $cuit;

//    /**
//     * @param mixed $id
//     */
//    public function setId($id): self
//    {
//        $this->id = $id;
//        return $this;
//    }



    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getNumeroCui(): ?string
    {
        return $this->numeroCui;
    }

    public function setNumeroCui(string $numeroCui): self
    {
        $this->numeroCui = $numeroCui;

        return $this;
    }

    public function getTipoCui(): ?string
    {
        return $this->tipoCui;
    }

    public function setTipoCui(string $tipoCui): self
    {
        $this->tipoCui = $tipoCui;

        return $this;
    }

    public function getRelacionLaboral(): ?string
    {
        return $this->relacionLaboral;
    }

    public function setRelacionLaboral(string $relacionLaboral): self
    {
        $this->relacionLaboral = $relacionLaboral;

        return $this;
    }

    public function getTipoCuenta(): ?string
    {
        return $this->tipoCuenta;
    }

    public function setTipoCuenta(string $tipoCuenta): self
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    public function getPuesto(): ?string
    {
        return $this->puesto;
    }

    public function setPuesto(string $puesto): self
    {
        $this->puesto = $puesto;

        return $this;
    }

    public function getAreaSigla(): ?string
    {
        return $this->areaSigla;
    }

    public function setAreaSigla(string $areaSigla): self
    {
        $this->areaSigla = $areaSigla;

        return $this;
    }

    public function isAreaActiva(): ?bool
    {
        return $this->areaActiva;
    }

    public function setAreaActiva(bool $areaActiva): self
    {
        $this->areaActiva = $areaActiva;

        return $this;
    }

    public function getDomicilioLaboral(): ?string
    {
        return $this->domicilioLaboral;
    }

    public function setDomicilioLaboral(string $domicilioLaboral): self
    {
        $this->domicilioLaboral = $domicilioLaboral;

        return $this;
    }

    public function getRamaEstructura(): ?array
    {
        return $this->ramaEstructura;
    }

    public function setRamaEstructura(array $ramaEstructura): self
    {
        $this->ramaEstructura = $ramaEstructura;

        return $this;
    }

    public function getCuit(): ?string
    {
        return $this->cuit;
    }

    public function setCuit(string $cuit): self
    {
        $this->cuit = $cuit;

        return $this;
    }
}
