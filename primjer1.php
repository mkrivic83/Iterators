<?php

class SampleList{

    private array $items = [];
    private int $position = 0;

    public function __construct(array $items){
        $this->items = $items;
    }

    public function current(){
        return $this->items[$this->position];
    }

    public function next(){
        $this->position++;
    }

    public function valid(){
        return isset($this->items[$this->position]);
    }

    public function reset(){
        $this->position=0;
    }
    public function sortAsc(){
        sort($this->items);
        $this->reset();
    }

    public function sortDesc(){
        rsort($this->items);
        $this->reset();
    }
 
}

$list = new SampleList(["Ana","Marko","Luka","Ivan","Boris","Damir"]);

while($list->valid()){
    echo $list->current()."<br>";
    $list->next();
}

echo "<h3>Sort (A-Z)</h3>";
$list->sortAsc();

while($list->valid()){
    echo $list->current()."<br>";
    $list->next();
}

echo "<h3>Sort (Z-A)</h3>";
$list->sortDesc();

while($list->valid()){
    echo $list->current()."<br>";
    $list->next();
}

$listbr = new SampleList([22,35,43,21,47,58]);

while($listbr->valid()){
    echo "<br>Broj: ".$listbr->current();
    $listbr->next();
}




?>