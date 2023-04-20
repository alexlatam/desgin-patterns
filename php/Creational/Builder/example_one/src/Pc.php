<?php 

namespace Builder;

// Esta es la clase que se va a construir
class Pc
{
    private string $cpu; // Central Processing Unit
    private string $ram; // Random Access Memory
    private string $hdd; // Hard Disk Drive
    private string $gpu; // Graphics Processing Unit

    public function getCpu(): string
    {
        return $this->cpu;
    }

    public function setCpu(string $cpu): self
    {
        $this->cpu = $cpu;
        return $this;
    }

    public function getRam(): string
    {
        return $this->ram;
    }

    public function setRam(string $ram): self
    {
        $this->ram = $ram;
        return $this;
    }

    public function getHdd(): string
    {
        return $this->hdd;
    }

    public function setHdd(string $hdd): self
    {
        $this->hdd = $hdd;
        return $this;
    }

    public function getGpu(): string
    {
        return $this->gpu;
    }

    public function setGpu(string $gpu): self
    {
        $this->gpu = $gpu;
        return $this;
    }
}