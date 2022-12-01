<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

var_dump($hotels);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  <title>PHP-Hotels</title>
</head>
<body>
  

  <div class="container">
  <div class="row pb-4">
  <form action="./index.php" method="GET" class="d-flex justify-content-center align-items-center w-100">
        <div class="form-check mx-4">
            <input class="form-check-input" type="radio" name="parking" id="withparking" value="true">
            <label class="form-check-label" for="parking">
                with-parking
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="parking" id="noparking" value="false">
            <label class="form-check-label" for="noparking">
                No-parking
            </label>
        </div>

        <select class="form-select w-25 mx-3" aria-label="Default select example" name="vote">
            <option selected>VOTE</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <button class="btn btn-primary" type="submit">SEARCH</button>
    </form>
  </div>


    <div class="row">
      <table class="table">
      <thead>
        <tr>
          <?php $hotel = $hotels[0]; ?>
          <?php foreach ($hotel as $key => $value) :?>
          <th scope="col"><?php echo $key ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel) :?>
        <tr>
          <?php foreach ($hotel as $key => $value) :?>
            <?php if($key === 'parking') {$value === true ? $value = 'Si' : $value = 'No';} ?>
              <td><?php echo $value ?></td>
          <?php endforeach ?>
        </tr>
        <?php endforeach ?>
      </tbody>
      </table>
    </div>
  </div>


</body>
</html>