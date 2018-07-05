<?php

namespace App\Presenters;

use Nette;


class GalleryPresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault()
    {
        $this->template->gallery=["jon-tyson-533596-unsplash.jpg","casey-horner-487085-unsplash.jpg","thomas-kelley-64329-unsplash.jpg","wil-stewart-18242-unsplash.jpg","kalen-emsley-99666-unsplash.jpg","elke-karin-lugert-125493-unsplash.jpg"];
    }
}
