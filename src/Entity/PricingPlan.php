<?php

namespace App\Entity;

use App\Repository\PricingPlanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PricingPlanRepository::class)]
class PricingPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\OneToMany(mappedBy: 'pricingPlan', targetEntity: PricingPlanBenifit::class)]
    private Collection $benefit;

    #[ORM\ManyToMany(targetEntity: PricingPlanFeatures::class)]
    private Collection $feature;

    public function __construct()
    {
        $this->benefit = new ArrayCollection();
        $this->feature = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, PricingPlanBenifit>
     */
    public function getBenefit(): Collection
    {
        return $this->benefit;
    }

    public function addBenefit(PricingPlanBenifit $benefit): static
    {
        if (!$this->benefit->contains($benefit)) {
            $this->benefit->add($benefit);
            $benefit->setPricingPlan($this);
        }

        return $this;
    }

    public function removeBenefit(PricingPlanBenifit $benefit): static
    {
        if ($this->benefit->removeElement($benefit)) {
            // set the owning side to null (unless already changed)
            if ($benefit->getPricingPlan() === $this) {
                $benefit->setPricingPlan(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PricingPlanFeatures>
     */
    public function getFeature(): Collection
    {
        return $this->feature;
    }

    public function addFeature(PricingPlanFeatures $feature): static
    {
        if (!$this->feature->contains($feature)) {
            $this->feature->add($feature);
        }

        return $this;
    }

    public function removeFeature(PricingPlanFeatures $feature): static
    {
        $this->feature->removeElement($feature);

        return $this;
    }
}
