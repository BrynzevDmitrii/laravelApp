<?php
namespace App\Http\Controllers;

trait NewTrait {

    public function getCategory(int $id = null):array
    {
        $categorty=[];
        $quantiCategory=6;
        if($id===null){
        for($i=0; $i<$quantiCategory; $i++){
            $categorty[$i]=[
                'id'=>$i,
                'title'=>\fake()->jobTitle(),
                'description'=>\fake()->text(100),
                'author'=>\fake()->userName(),
                'created_at'=>\now(),
            ];
        }
        return $categorty;
        }

        return [
            'id'=>$id,
            'title'=>\fake()->jobTitle(),
            'description'=>\fake()->text(200),
            'author'=>\fake()->userName(),
            'created_at'=>\fake()->dateTime(),
        ];
    }

    public function getNews(int $id = null):array
    {
        $news=[];
        $quantiNews=5;
        if($id===null){
        for($i=0; $i<$quantiNews; $i++){
            $categorty[$i]=[
                'id'=>$i,
                'title'=>\fake()->jobTitle(),
                'description'=>\fake()->text($maxNbChars = 200),
                'author'=>\fake()->userName(),
                'created_at'=>\now(),

            ];

        }
        return $news;
    }

        return [
            'id'=>$id,
            'title'=>\fake()->jobTitle(),
            'description'=>\fake()->text($maxNbChars = 200),
            'autor'=>\fake()->userName(),
            'created_at'=>\now(),
        ];

    }
}
