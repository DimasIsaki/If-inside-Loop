<?php
echo "<b> If Inside Loop</b>";
for ($a=1; $a <=20; $a++) {
    echo "</br> Umur saya sekarang : ".$a. " Tahun";
    if ($a==17) {
        echo ". Saya sudah dewasa";
    }
}
?>