<?php
class Student {
    Public $id, $name, $math, $khmer, $english;
    public function SetInput($id, $name, $math, $khmer, $english) {
        $this->id = $id;
        $this->name = $name;
        $this->math = $math;
        $this->khmer = $khmer;
        $this->english = $english;
    }
    public function GetID() {
        return $this->id;
    }
    public function GetName() {
        return $this->name;
    }
    public function GetMath() {
        return $this->math;
    }
    public function GetKhmer() {
        return $this->khmer;
    }
    public function GetEnglish() {
        return $this->english;
    }
    public function GetTotal() {
        return $this->english + $this->khmer + $this->math / 5;
    }
}
?>