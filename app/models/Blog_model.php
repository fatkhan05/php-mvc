<?php

class Blog_model
{
    private $blog = [
        [
            "penulis"  => "GURU RPL",
            "judul"  => "Belajar Php MVC",
            "tulisan"  => "Models"
        ],
        [
            "penulis"  => "GURU RPL",
            "judul"  => "Belajar Php MVC",
            "tulisan"  => "Views"
        ],
        [
            "penulis"  => "GURU RPL",
            "judul"  => "Belajar Php MVC",
            "tulisan"  => "Controllers"
        ]
    ];

    public function getAllBlog()
    {
        return $this->blog;
    }
}