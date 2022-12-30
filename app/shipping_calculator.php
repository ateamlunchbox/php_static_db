{"shipping_amount_in_usd":"<?php

$array = [
  "furniture_product_id_339" => [
    "pine" => [
      "finish_1" => [
        "queen" => [
          59859 => "$227.35"
        ]
      ]
    ]
  ]
];

echo $array[$_GET['product_id']][$_GET['wood_type']][$_GET['finish']][$_GET['size']][$_GET['zip_code']];
?>"}