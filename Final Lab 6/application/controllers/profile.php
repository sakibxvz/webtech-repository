<?php 

class profile extends framework {

    public function __construct()
    {
      if(!$this->getSession('userId')){

        $this->redirect("accountController/loginForm");

      }
       $this->helper("link");
       $this->profileModel = $this->model("profileModel"); 
    }
    public function index(){
      $ticketData = $this->profileModel->getTicket();
      $cardData = $this->profileModel->getCardData();
      
      $this->view("profile", [$ticketData,$cardData]);

    }
    public function orders(){
      $data = $this->profileModel->getData();
      $cardData = $this->profileModel->getCardData();
      
      $this->view("order",[$data,$cardData]);

    }

    public function vieworder($id){
      $single_Order_data = $this->profileModel->getOrder($id);    
      $this->view("vieworder",$single_Order_data);
    }

    public function orderForm(){
      $data = $this->profileModel->getData();
      $this->view("addOrder",$data);
    }

    public function orderStore(){
      
      $orderData = [

       'Fristname'           => $this->input('Fristname'),
       'Lastname'          => $this->input('Lastname'),
       'Address'           => $this->input('Address'),
       'OrderItem'          => $this->input('OrderItem'),
       'OrderPrice'        => $this->input('OrderPrice'),
       'Quantity'           => $this->input('Quantity'),
       'OrderDate'          => $this->input('OrderDate'),
       'DeliveryStatus'        => $this->input('DeliveryStatus'),
       'OrderCancled'          => '',
       'DeliveryShipped'          => '',
       'DeliveryDone'          => '',

       'FristnameError'      => '',
       'LastnameError'     => '',
       'AddressError'      => '',
       'OrderItemError'     => '',
       'OrderPriceError'   => '',
       'QuantityError'      => '',
       'OrderDateError'     => '',
       'DeliveryStatusError'   => '',

      ];

      switch ($orderData['DeliveryStatus']) {
        case '2':
          $orderData['OrderCancled']= $this->input('OrderDate');
          break;
        
        case '3':
          $orderData['OrderCancled']= '';
          $orderData['DeliveryShipped']= $this->input('OrderDate');
          break;
        
        case '4':
          $orderData['DeliveryShipped']= $this->input('OrderDate');
          $orderData['DeliveryDone']= $this->input('OrderDate');
          break;
      }

      if(empty($orderData['Fristname'])){
        $orderData['FristnameError'] = "Frist name is required";
      }
      if(empty($orderData['Lastname'])){
        $orderData['LastnameError'] = "Last name is required";
      }
      if(empty($orderData['Address'])){
        $orderData['AddressError'] = "Address is required";
      }
      if(empty($orderData['OrderItem'])){
        $orderData['OrderItemError'] = "Order Item  is required";
      }
      if(empty($orderData['OrderPrice'])){
        $orderData['OrderPriceError'] = "OrderPrice is required";
      }
      if(empty($orderData['Quantity'])){
        $orderData['QuantityError'] = "Quantity is required";
      }
      if(empty($orderData['OrderDate'])){
        $orderData['OrderDateError'] = "Order Date is required";
      }
      if(empty($orderData['DeliveryStatus'])){
        $orderData['DeliveryStatusError'] = "Delivery Status is required";
      }

      if(empty($orderData['FristnameError']) && empty($orderData['LastnameError']) && empty($orderData['AddressError']) && empty($orderData['priceError']) && empty($orderData['OrderItemError']) && empty($orderData['OrderPriceError']) && empty($orderData['QuantityError']) && empty($orderData['OrderDateError']) && empty($orderData['DeliveryStatusError'])){

        $data = [$orderData['Fristname'], $orderData['Lastname'], $orderData['Address'], $orderData['OrderItem'], $orderData['Quantity'], $orderData['OrderPrice'], $orderData['OrderDate'], $orderData['OrderCancled'], $orderData['DeliveryShipped'], $orderData['DeliveryDone'], $orderData['DeliveryStatus']];
         if($this->profileModel->addOrder($data)){
                $this->setFlash("orderAdded", "Your order has been added successfuly");
                $this->redirect("profile/index");
         }

;
      } else {
        $this->view("addOrder", $orderData);
      }

    }

    public function edit_order($id){
      $orderEdit = $this->profileModel->edit_data($id);
      $data = [

        'data'    => $orderEdit,
        'FristnameError'      => '',
        'LastnameError'     => '',
        'AddressError'      => '',
        'OrderItemError'     => '',
        'OrderPriceError'   => '',
        'QuantityError'      => '',
        'OrderDateError'     => '',
        'DeliveryStatusError'   => '',

      ];
      $this->view("edit_order", $data);

    }

    public function updateOrder(){

      $id = $this->input('hiddenId');
      $orderEdit = $this->profileModel->edit_data($id);
      $orderData = [

       'OrderID'        => $this->input('hiddenId'),
       'Fristname'           => $this->input('Fristname'),
       'Lastname'          => $this->input('Lastname'),
       'Address'           => $this->input('Address'),
       'OrderItem'          => $this->input('OrderItem'),
       'Quantity'           => $this->input('Quantity'),
       'OrderPrice'        => $this->input('OrderPrice'),
       'OrderDate'          => $this->input('OrderDate'),
       'OrderCancled'          => '',
       'DeliveryShipped'          => '',
       'DeliveryDone'          => '',
       'DeliveryStatus'        => $this->input('DeliveryStatus'),
       'data'=> $orderEdit,
       'hiddenId'=> $this->input('hiddenId'),

       'FristnameError'      => '',
       'LastnameError'     => '',
       'AddressError'      => '',
       'OrderItemError'     => '',
       'OrderPriceError'   => '',
       'QuantityError'      => '',
       'OrderDateError'     => '',
       'DeliveryStatusError'   => '',

      ];
      switch ($orderData['DeliveryStatus']) {
        case '2':
          $orderData['OrderCancled']= $this->input('OrderDate');
          $orderData['DeliveryShipped']= "NULL";
          $orderData['DeliveryDone']= "NULL";;
          break;
        
        case '3':
          $orderData['OrderCancled']= 'NULL';
          $orderData['DeliveryShipped']= $this->input('OrderDate');
          $orderData['DeliveryDone']= "NULL";
          break;
        
        case '4':
          $orderData['OrderCancled']= "NULL";
          $orderData['DeliveryShipped']= $this->input('OrderDate');
          $orderData['DeliveryDone']= $this->input('OrderDate');
          break;
      }
      if (empty($orderData['FristnameError']) && empty($orderData['LastnameError']) && empty($orderData['AddressError']) && empty($orderData['priceError']) && empty($orderData['OrderItemError']) && empty($orderData['OrderPriceError']) && empty($orderData['QuantityError']) && empty($orderData['OrderDateError']) && empty($orderData['DeliveryStatusError'])) {
       $updateData= [
        $orderData['OrderID'],
        $orderData['Fristname'],
        $orderData['Lastname'],
        $orderData['Address'],
        $orderData['OrderItem'],
        $orderData['Quantity'],
        $orderData['OrderPrice'],
        $orderData['OrderDate'],
        $orderData['OrderCancled'],
        $orderData['DeliveryShipped'],
        $orderData['DeliveryDone'],$orderData['DeliveryStatus'],$orderData['hiddenId']
      ];
          if ($this->profileModel->updateOrder($updateData)) {
            $this->setFlash('orderUpdated','Your order record has been updated successfully');
            $this->redirect("profile/index");
          }else{
            echo "Sorry server error ";
            print_r($updateData);
          }
      }else{
          $this->view("edit_order", $orderData);
      }
    }

    public function delete($id){
      if($this->profileModel->deleteOrder($id)){
        $this->setFlash('deleted', 'Your order has been deleted successfully');
        $this->redirect('profile/index');
      }

    }
    public function account($id){
      $data=$this->profileModel->getAccountData($id);
      $this->view("account",$data);
    }

    public function updateAccount(){
      $accountData = [
       'fullname'        => $this->input('fullname'),
       'email'        => $this->input('email'),
       'hiddenID'        => $this->input('hiddenId'),

       

      ];
          if ($this->profileModel->updateAccountdata($accountData)) {
            $this->setFlash('AccountUpdated','Your account record has been updated successfully');
            $this->redirect("profile/index");
          }else{
            echo "Sorry server error ";
            print_r($accountData);
          }
    }
    public function updateAccountPass(){
      $accountPassData = [
       'password'        => password_hash($this->input('fullname')) ,
       'hiddenID'        => $this->input('hiddenId'),
      ];
          if ($this->profileModel->updateAccountPassData($accountPassData)) {
            $this->setFlash('AccountUpdated','Your account record has been updated successfully');
            $this->redirect("profile/index");
          }else{
            echo "Sorry server error ";
            print_r($accountPassData);
          }
    }



    public function logout(){

        $this->destroy();
        $this->redirect("accountController/loginForm");

    }

}


?>