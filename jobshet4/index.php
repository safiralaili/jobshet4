<?php
// Menggunakan for loop
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        
        
echo $i;
    }
    echo "<br>"; // Pindah ke baris baru setelah selesai
}
?>

<?php
//Menggunakan while loop
$i = 1;
while ($i <= 5) {
    $j = 1;
    while ($j <= $i) {
        echo $i;
        $j++;
    }
    echo "<br>";
    $i++;
}
?>

<?php
//Mengunkan Do-while
$n = 5; // Ganti dengan angka yang ingin dihitung faktorialnya
$factorial = 1;
$i = 1;

do {
    $factorial *= $i;
    $i++;
} while ($i <= $n);

echo "Faktorial dari $n adalah $factorial";
?>