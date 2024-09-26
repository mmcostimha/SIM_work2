<?php

require_once("MyPDO.php");


function create_customer($name, $address, $zip, $city, $country)
{

    $pdo = new MyPDO();

    $queryString = "insert into customers(name, address, zip, city, country)

    values(:name, :address,:zip, :city, :country )";

    $statement = $pdo->prepare($queryString);

    $statement->execute([

        ':name'     => $name,

        ':address'  => $address,

        ':zip'      => $zip,

        ':city'     => $city,

        ':country'  => $country​

    ]);

    $id_customer = $pdo->lastInsertId();

    return $id_customer;

}



function select_customer($id_costumer)

{

    $pdo = new MyPDO();

    $queryString = "select id, name, address, zip, city, country from customers​

      where id= :id";

    $statement = $pdo->prepare($queryString);

    $statement->bindParam(':id', $id_costumer, PDO::PARAM_INT);

    $statement->execute();

    $customer = $statement->fetch(PDO::FETCH_ASSOC);    

    return json_encode($customer);

}





header('Content-type: application/json');



if(empty($_REQUEST["submit"])) {

    echo json_encode("you need to specify the service");

    die;

}



if($_REQUEST["submit"]=='create') {

    $id_customer = create_customer(

        $_REQUEST["name"],

        $_REQUEST["address"],

        $_REQUEST["zip"],

        $_REQUEST["city"],

        $_REQUEST["country"],

    );



    // read from database​

    $json_customer = select_customer($id_customer);

    echo $json_customer;

} 