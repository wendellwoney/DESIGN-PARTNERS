<?php
namespace Proxy;

class ProxyImage extends Image
{
    private $fileName;
    private $image;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function displayImage()
    {
       if (is_null($this->image))
           $this->image = new RealImage($this->fileName);

        $this->image->displayImage();
    }
}