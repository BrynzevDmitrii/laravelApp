<?php
namespace App\Http\Controllers;

trait NewTrait {

    public function getCategory(int $id = null):array
    {
        $categorty=[];
        $quantiCategory=5;
        if($id===null){
        for($i=0; $i<$quantiCategory; $i++){
            $categorty[$i]=[
                'id'=>$i,
                'title'=>\fake()->jobTitle(),
            ];
        }
        return $categorty;
        }

        return [
            'id'=>$id,
            'title'=>\fake()->jobTitle(),
        ];
    }

    public function getNews(int $id = null):array
    {
        $news=[];
        $quantiNews=5;
        for($i=0; $i<$quantiNews; $i++){
            $categorty[$i]=[
                'id'=>$i,
                'title'=>\fake()->jobTitle(),
            ];
            return $news;
        }
        
        return [
            'id'=>$id,
            'title'=>\fake()->jobTitle(),
        ];

    }
}
