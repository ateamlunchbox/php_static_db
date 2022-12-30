Usage:

In one terminal, from the directory containing this file run:

docker compose up

then browse to 

http://localhost:8080/shipping_calculator.php?product_id=furniture_product_id_339&wood_type=pine&finish=finish_1&size=queen&zip_code=59859

This code will pull the shipping amount from the nested arrays based on
the various fields provided as HTTP query parameters.

It should be possible to convert the existing CSV file with all the data to a PHP code
file containing a group of nested arrays with all the possible shipping combinations. I expect it would execute pretty quickly as a PHP file.
