<!-- immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende **prodotti** per animali
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti
- I prodotti saranno suddivisi anche per **tipologia** come cibo, giochi, cucce, etc

Stampiamo delle card contenenti i dettagli dei prodotti -->

<?php
class AnimalsProducts
{
    // variabili
    public $category;
    public $typology;
    public $price;

    // costruttore
    public function __construct($_category, $_typology, $_price)
    {
        $this->category = $_category;
        $this->typology = $_typology;
        $this->price = $_price;
    }

    // metodo
    public function getHtml()
    {
        return
            '<ul>
            <li>Category: ' . $this->category . '</li>'
            . '<li>Typology: ' . $this->typology . '</li>'
            . '<li>Price: ' . $this->price . '</li>
        </ul>';

    }
}

// Oggetti/Istanze
$leash = new AnimalsProducts('dog', 'accessories', 15);
$bone = new AnimalsProducts('dog', 'toys', 5);
$ball = new AnimalsProducts('cat', 'toys', 3);

echo '<h2>Leash</h2>' . $leash->getHtml();
echo '<h2>Bone</h2>' . $bone->getHtml();
echo '<h2>Ball</h2>' . $ball->getHtml();