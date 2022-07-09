<?php declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\Controller\Controller;
use APP\Core\View\Responce;

final class IndexController extends Controller {

    static public function Home() : Responce {
        return new Responce('Index@home',[
            'articles' => [
                [
                    'img' => 'https://res.cloudinary.com/hv9ssmzrz/image/fetch/c_fill,f_auto,h_387,q_auto,w_650/https://s3-eu-west-1.amazonaws.com/images-ca-1-0-1-eu/tag_photos/original/111/pommes-flickr-2861818327_1bd4b4bfdb_b.jpg',
                    'label' => 'pommmes',
                    'price' => 2,
                    'pound' => 1  # en Kilogramme
                ],
                [
                    'img' => 'https://i-sam.unimedias.fr/2019/10/17/poire-fruit.jpeg?auto=format%2Ccompress&crop=faces&cs=tinysrgb&fit=crop&h=453&w=806',
                    'label' => 'poires',
                    'price' => 5.5,
                    'pound' => 1  # en Kilogramme
                ],
                [
                    'img' => 'https://res.cloudinary.com/hv9ssmzrz/image/fetch/c_fill,f_auto,h_387,q_auto,w_650/https://s3-eu-west-1.amazonaws.com/images-ca-1-0-1-eu/tag_photos/original/28/oranges_flickr_2288241903_dd301caaee_b.jpg',
                    'label' => 'oranges',
                    'price' => 6,
                    'pound' => 2.5  # en Kilogramme
                ],                
            ]
        ]);
    }
    
    static public function Index(): Responce {
        return new Responce('Index@index');
    }
}