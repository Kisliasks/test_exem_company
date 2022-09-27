<?php 

//Примечание: в данном коде не были учтены склонения дней недели 
// и других русскоязычных слов по соображениям излишней функциональности





class Animals {
   
    public $countAnimals = array(
        'cow' => [
          
        ],
        'chicken' => [
           
        ]
    );
    public $countProduct = array(
        'eggs' => 0,
        'milk' => 0
    );
}


class Farm extends Animals {

  
    public function setCountAnimal($count, $animal_name) {
        if (array_key_exists($animal_name, $this->countAnimals)){
            if($count == 1) {
            array_push($this->countAnimals[$animal_name], $animal_name);
            echo 'Добавлено '.$count.' '.$animal_name, "\n";
            } else {
                
                for ( $i = 1; $i <= $count; $i++ ) {
                    $this->countAnimals[$animal_name] += [ $animal_name.$i => $i ];
                }
                echo 'Добавлено '.$count.' '.$animal_name, "\n";
            }
        }  else {

            echo 'Такого животного нет на ферме', "\n";
            // exit;
        }
          
    }

    public function getCountAnimals(){
        
        foreach($this->countAnimals as $key => $val) {
            echo  "На ферме: ";
            echo count($val).' '.$key, "\n";
        }
     

      }

    public function setProduct($count, $product_name, $animal_name, $day_of_week) {
        if (array_key_exists($product_name, $this->countProduct)) {
            foreach($this->countAnimals as $key => $val) {
                if($key == $animal_name) {
                    $count_animal = count($val);  //количество животных на ферме, согласно аргументу метода
                      }
                  
            }
            $count = $count * $count_animal;
            $this->countProduct[$product_name] += $count; 

            echo 'В '.$day_of_week.' собрано '. $count. ' '. $product_name, "\n";
    
        } else {
            echo 'Нельзя собрать '.$product_name. ', так как на ферме нет соответствующего животного.';
            exit;
        }
    }

   
      public function getCountProduct() {

        foreach($this->countProduct as $key => $val) {
            echo  "На ферме: ";
            echo $val.' '.$key, "\n";
        }
      }

   
}



$farm = new Farm();
$farm->setCountAnimal(10, 'cow');
$farm->setCountAnimal(20, 'chicken');
$farm->getCountAnimals();   // получаем информацию о животных на ферме

// собираем продукцию в течение недели
$farm->setProduct(8, 'milk','cow', 'Понедельник');
$farm->setProduct(1, 'eggs','chicken', 'Понедельник');

$farm->setProduct(9, 'milk','cow', 'Вторник');
$farm->setProduct(1, 'eggs','chicken', 'Вторник');

$farm->setProduct(10, 'milk','cow', 'Среда');
$farm->setProduct(1, 'eggs','chicken', 'Среда');

$farm->setProduct(8, 'milk','cow', 'Четверг');
$farm->setProduct(1, 'eggs','chicken', 'Четверг');

$farm->setProduct(11, 'milk','cow', 'Пятница');
$farm->setProduct(1, 'eggs','chicken', 'Пятница');

$farm->setProduct(9, 'milk','cow', 'Суббота');
$farm->setProduct(1, 'eggs','chicken', 'Суббота');

$farm->setProduct(12, 'milk','cow', 'Воскресенье');
$farm->setProduct(1, 'eggs','chicken', 'Воскресенье');
// конец сбора 

$farm->getCountProduct();  // получаем количество всей продукции на ферме

$farm->setCountAnimal(1, 'chicken'); // возможно единичное добавление животных
$farm->setCountAnimal(1, 'cow'); 
$farm->setCountAnimal(1, 'chicken'); 
$farm->setCountAnimal(1, 'chicken');
$farm->setCountAnimal(1, 'chicken');
$farm->setCountAnimal(1, 'chicken');

$farm->getCountAnimals(); 

// собираем продукцию в течение недели
$farm->setProduct(9, 'milk','cow', 'Понедельник');
$farm->setProduct(1, 'eggs','chicken', 'Понедельник');

$farm->setProduct(12, 'milk','cow', 'Вторник');
$farm->setProduct(1, 'eggs','chicken', 'Вторник');

$farm->setProduct(12, 'milk','cow', 'Среда');
$farm->setProduct(1, 'eggs','chicken', 'Среда');

$farm->setProduct(8, 'milk','cow', 'Четверг');
$farm->setProduct(1, 'eggs','chicken', 'Четверг');

$farm->setProduct(9, 'milk','cow', 'Пятница');
$farm->setProduct(1, 'eggs','chicken', 'Пятница');

$farm->setProduct(10, 'milk','cow', 'Суббота');
$farm->setProduct(1, 'eggs','chicken', 'Суббота');

$farm->setProduct(11, 'milk','cow', 'Воскресенье');
$farm->setProduct(1, 'eggs','chicken', 'Воскресенье');
// конец сбора 

$farm->getCountProduct(); 


?>