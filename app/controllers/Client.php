<?php 

class Client extends Controller {
    private $serviceShop;

    public function __construct()
        {
            $this->serviceShop = new serviceShop();
        }


    public function shop() {
        $this->view("client/shop");
    }


    public function getProducts() {
        try {
            $products = $this ->serviceShop->getProducts();
            header("Content-Type: application/json");
            echo json_encode($products);
        } catch (Exception $e) {
            // handle error gracefully
            header("Content-Type: application/json", true, 500);
            echo json_encode(["error"=> $e->getMessage()]);
        


    }
}

public function getCategories() {
    try {
        $products = $this ->serviceShop->getCategories();
        header("Content-Type: application/json");
        echo json_encode($products);
    } catch (Exception $e) {
        // handle error gracefully
        header("Content-Type: application/json", true, 500);
        echo json_encode(["error"=> $e->getMessage()]);
    


}
}

    public function panier(){
        $this->view('client/panier');
    }

}

?>