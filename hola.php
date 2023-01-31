<?php
$url = 'https://telemetria-ab0ec-default-rtdb.firebaseio.com/medicion-prueba.json';
$data = curl_init();
curl_setopt($data, CURLOPT_URL, $url);
curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($data);
$dataFireBase = json_decode($response, true);
curl_close($data);
// echo "<pre>";
// print_r($dataFireBase);
// echo "</pre>";
?>
<style>
.table{
    border: 1px solid black;
    padding: 5px;
}
</style>
<table class="table">
    <thead>
        <tr>
            <th>CODIGO</th>
            <th>FECHA</th>
            <th>TANQUE</th>
            <th>SALDO</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataFireBase as $data) { 
            //! DIRECTAMENTE OBTENER A FIREBASE SIN RECORRER CADA DATO
            // ? 
            if($data['fecha'] == '2022-09-07 11:00'){ 
            ?>
            <tr>
            <td><?= $data['codigo'] ?></td>
            <td><?= $data['fecha']?></td>
            <td><?= $data['tanque']?></td>
            <td><?= $data['saldo']?></td>
            <tr>
        <?php }
    }?>
    </tbody>
</table>
<script src="./index.js"></script>