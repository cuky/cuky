<?php

namespace App\Presenters;

use Nette;


class GalleryPresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault()
    {
        $this->template->gallery=["jon-tyson-533596-unsplash.jpg","casey-horner-487085-unsplash.jpg"];
    }
}
