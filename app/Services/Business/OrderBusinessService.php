<?php

namespace App\Services\Business;
use App\Services\Data\CustomerDAO;
use App\Services\Data\OrderDAO;

class OrderBusinessService {
    
    function createOrder($firstName, $lastName, $product) {
        $customer = new CustomerDAO();
        $order = new OrderDAO();
        //Make the customer
        $customer->addCustomer($firstName, $lastName);
        $order->addOrder($product);
        
    }
    
    
}