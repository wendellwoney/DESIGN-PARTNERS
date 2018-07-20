<?php
namespace Proxy;

class RealImage extends Image
{
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadImageFromDisk();
    }

    private function loadImageFromDisk()
    {
        print "Loading " . $this->fileName . "<br>";
    }

    public function displayImage()
    {
        print "Displaing " . $this->fileName. "<br>";
    }
}