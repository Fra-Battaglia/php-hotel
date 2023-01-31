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

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Hotel</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	</head>
	<body class="bg-dark">
		<div class="container vh-100">
			<div class="row h-100 align-items-center justify-content-center">
				<div class="col-8">
					<h1 class="text-center text-white">Lista Hotels</h1>
					<table class="table table-light table-striped">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Descrizione</th>
								<th>Parcheggio</th>
								<th>Voto</th>
								<th>Distanza dal centro</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($hotels as $hotel) { ?>
							<tr>
								<td><?php echo $hotel['name']; ?></td>
								<td><?php echo $hotel['description']; ?></td>
								<td>
									<?php if($hotel['parking']) { 
										echo 'Sì';
									} 
									else { 
										echo 'No';
									} ?>
								</td>
								<td><?php echo $hotel['vote']; ?></td>
								<td><?php echo $hotel['distance_to_center']; ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>