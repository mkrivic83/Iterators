<?php



class StudentCollection implements Iterator{

    private array $students;
    private int $position = 0;

    public function __construct(array $students){
        $this->students = $students;
    }

    public function current() {
        return $this->students[$this->position];
    }

    public function key(){
        return $this->position;
    }

    public function next(){
        $this->position++;
    }

    public function rewind(){
        $this->position=0;
    }

    public function valid(){
        return isset($this->students[$this->position]);
    }

    public function search($searchitem){
        foreach($this->students as $stud){
            if($stud===$searchitem){
                return $stud;
            }
        }
        return null;
    }
}

  $col = new StudentCollection(["Petar","Mara","Ivo","Robert"]);

  foreach($col as $student){
    echo "<br>Student: ".$student;
  }

  echo "<hr>";

  $rezultat = $col->search("Mara");
  echo $rezultat ? "<br>Student pronađen: ".$rezultat : "<br>Student nije pronađen";

    $rezultat = $col->search("Pero");
  echo $rezultat ? "<br>Student pronađen: ".$rezultat : "<br>Student nije pronađen";

?>