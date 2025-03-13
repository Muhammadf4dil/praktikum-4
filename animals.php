<?php
class Animals {
    public $animals=["kucing anggora","kelinci","harimau","buaya","serigala"];

    function index(){
        echo "<ol>";
        foreach($this->animals as $key => $velue){
            echo "<li>$velue</li>";
        }
        echo "</ol>";
    }
    function store($hewan){
        array_push($this->animals,$hewan);
        $this->index();
    }
    public function update($key, $velue)
    {
        if (isset($this->animals[$key])) {
        $this->animals[$key]=$velue;
        // memanggil menthod index
        $this->index();
        } else{
            echo "hewan tidak ditemukan";
        }
    }
    public function destroy($key){
        if (isset($this->animals[$key])) {
            unset($this->animals[$key]);
            // memanggil menthod index
            $this->index();
            } else{
                echo "hewan tidak ditemukan";
            }
    }
}
$hewan = new Animals();
echo"index - menampilkan seluruh data Hewan <br>";
$hewan->index(); 
echo "<br>";

echo "Store - menambahkan data hewan baru (Burung)<br>";
$hewan->store("burung");
echo "<br>";

echo "Update - mengubah data hewan baru <br>";
$hewan->Update(6,"kucing anggora");
echo "<br>";
echo "destroy - menghapus data hewan <br>";
$hewan->destroy(0,);
echo "<br>";
?>