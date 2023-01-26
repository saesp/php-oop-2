<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Animals Product</h1>
    </header>

    <main>
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
                    . '<li>Price: ' . $this->price . ' €</li>
             </ul>';
            }
        }

        class Food extends AnimalsProducts
        {
            public $expiration;

            public function __construct($_name, $_category, $_typology, $_price, $_expiration)
            {
                parent::__construct($_name, $_category, $_typology, $_price);
                $this->expiration = $_expiration;
            }

            public function getHtml()
            {
                return '<h3>' . $this->name . '</h3>'
                    . '<ul>
            <li>Category: ' . $this->category . '</li>'
                    . '<li>Typology: ' . $this->typology . '</li>'
                    . '<li>Price: ' . $this->price . ' €</li>'
                    . '<li>Expiration date: ' . $this->expiration . '</li>
             </ul>';
            }
        }


        // oggetti/istanze
        $products = [
            $meat = new Food('Meat', 'dogs', 'accessories', 4, '1/04/2023'),
            $fish = new Food('Fish', 'cats', 'toys', 4, '28/02/2023'),
            $leash = new AnimalsProducts('Leash', 'dogs', 'accessories', 15),
            $bone = new AnimalsProducts('Bone', 'dogs', 'toys', 5),
            $ball = new AnimalsProducts('Ball', 'cats', 'toys', 3),
        ];

        foreach ($products as $product) {
            echo $product->getHtml();
        }
        ?>
    </main>
</body>

</html>


<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    main {
        margin: 40px;
    }
</style>