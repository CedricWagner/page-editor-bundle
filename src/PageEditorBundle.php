<?php
namespace CedricWagner\PageEditorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PageEditorBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}