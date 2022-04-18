<?php

$hotels = [
  [
      'hotel_name' => 'Hotel A',
      'info' => 'Hotel A Info',
      'rooms' => [
          [
              'room_name' => 'Luxury Room',
              'bed' => 2,
              'boards' => [
                  'board_id' => 1,
                  'price' => 200
              ]
          ],
          [
              'room_name' => 'Non Luxy Room',
              'bed' => 4,
              'boards' => [
                  'board_id' => 2,
                  'price' => 150
              ]
          ],
      ]
  ],
  [
      'hotel_name' => 'Hotel B',
      'info' => 'Hotel B Info',
      'rooms' => [
          [
              'room_name' => 'Luxury Room',
              'bed' => 2,
              'boards' => [
                  'board_id' => 3,
                  'price' => 900
              ]
          ],
          [
              'room_name' => 'Non Luxy Room',
              'bed' => 4,
              'boards' => [
                  'board_id' => 4,
                  'price' => 300
              ]
          ],
      ]
  ]
];

?>
                
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels</title>
    <style>
        h4,p{
            margin: 5px 0;
            padding: 0;
        }
        .container{
            width: 80%;
            display: flex;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
        }
        .card{
            width: 200px;
            margin: 10px;
            padding: 20px;
            border: 1px solid;
            border-radius: 5px;
        }
        .description .content{
            display: flex;
            font-size: 14px;
        }
        .description .content .title{
            width: 100px;
            font-weight: bold;
        }
        .text-center{
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin: 10px 0;
        }
        .card-img img{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <?php
            foreach($hotels as $key => $value)
            {
                for($i = 0; $i < count($value['rooms']); $i++){
                ?>
            <div class="card">
                <div class="card-img">
                    <img src="hotel.jpeg" alt="hotel">
                </div>
                <div class="card-body">
                    <h4 class="text-center"><?php echo strtoupper($value['hotel_name']); ?></h4>
                    <p><?php echo strtoupper($value['info']); ?></p>
                    <div class="description">
                        <div class="content">
                            <p class="title">ROOM TYPES</p>
                            <p><?php echo $value['rooms'][$i]['room_name']; ?></p>
                        </div>
                        <div class="content">
                            <p class="title">BEDS</p>
                            <p><?php echo $value['rooms'][$i]['bed']; ?></p>
                        </div>
                        <div class="content">
                            <p class="title">BOARD</p>
                            <p><?php echo $value['rooms'][$i]['boards']['board_id']; ?></p>
                        </div>
                        <div class="content">
                            <p class="title">PRICE</p>
                            <p><?php echo $value['rooms'][$i]['boards']['price']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    }
    ?>
    </div>
</body>
</html>