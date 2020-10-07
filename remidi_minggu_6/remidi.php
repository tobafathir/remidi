<?php
$nama = [
    ["Asia", "Tiongkok", 1405820000],
    ["Asia", "India", 1366360000],
    ["Amerika", "Amerika Serikat", 334256000],
    ["Asia", "Indoneia", 268074600],
    ["Asia",  "pakistan", 221212000],
    ["Amerika Selatan", "Brazil", 213777000],
    ["Afrika", "Nigeria", 193392517],
    ["Asia", "Banglades", 169430000],
    ["Eropa", "Rusia", 146877088],
    ["Amerika Utara", "Mexico", 126577691],
    ["Asia ", "Jepang", 126420000]
];

// Membuat Pilihan
$temp_arr=[];

foreach ($nama as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$tampilkan_nama=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_nama=$merk;
    }else{
        foreach($nama as $key)
        {
            if($key[0] == $filter){
                $tampilkan_nama[]=[$key[0],$key[1],$key[2]];
            }
        }
    }
}else{
    $tampilkan_nama=$nama;
}
// var_dump($tampilkan_merk);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<body class="bg-info">
<div class="d-flex mx-auto">
  <h2 class="d-flex mx-auto">~Peringkat Jumlah Penduduk~</h2>
</div>
<div class="d-flex mx-auto">
  <h2 class="d-flex mx-auto">~Negara Se Dunia~</h2>
</div>

  <div class="d-flex">
    <form class="d-flex mx-auto" action="remidi.php" method="post">
        <select name="filter">
            <option value="">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
              <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
  </div>
  </form>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Benua</th>
      <th scope="col">Nama Negara</th>
      <th scope="col">Jumlah Penduduk</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_nama as $key => $value): ?>
  <tbody class="bg-light">
    <tr>

      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[2]; ?>
<?php endforeach; ?>
<thead class="bg-secondary">
    <tr>
      <th scope="col">Total Keseluruhan</th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>
    </tr>
  </thead>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>