<!-- immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende **prodotti** per animali
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti
- I prodotti saranno suddivisi anche per **tipologia** come cibo, giochi, cucce, etc

Stampiamo delle card contenenti i dettagli dei prodotti -->

<?php
class AnimalsProducts
{
    // variabili
    public $name;
    public $category;
    public $typology;
    public $price;

    // costruttore
    public function __construct($_name, $_category, $_typology, $_price)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->typology = $_typology;
        $this->price = $_price;
    }

    // metodo
    public function getHtml()
    {
        return
            '<h3>' . $this->name . '</h3>'
            . '<ul>
                <li>Category: ' . $this->category . '</li>'
            . '<li>Typology: ' . $this->typology . '</li>'
            . '<li>Price: ' . $this->price . '</li>
             </ul>';
    }
}

// oggetti/istanze
$products = [
    $leash = new AnimalsProducts('Leash', 'dogs', 'accessories', 15),
    $bone = new AnimalsProducts('Bone', 'dogs', 'toys', 5),
    $ball = new AnimalsProducts('Ball', 'cats', 'toys', 3),
];

foreach ($products as $product) {
    echo $product->getHtml();
}