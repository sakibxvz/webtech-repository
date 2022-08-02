<?php 

class profile extends framework {

    public function __construct()
    {
       $this->helper("link");
       $this->profileModel = $this->model("profileModel"); 
    }
    
    public function index(){
      $data= $this->profileModel->getData();
      $this->view("profile", $data);

    }

    public function productForm(){
      $this->view("addproduct");
    }

    public function productStore(){
      
      $productData = [

       'name'           => $this->input('name'),
       'buyingPrice'          => $this->input('buyingPrice'),
       'sellingPrice'          => $this->input('sellingPrice'),
       'displayable'        => $this->input('displayable'),
       'nameError'      => '',
       'buyingPriceError'     => '',
       'sellingPriceError'     => '',
       'displayableError'   => ''

      ];

      if(empty($productData['name'])){
        $productData['nameError'] = "Name is required";
      }
      if(empty($productData['buyingPrice'])){
        $productData['buyingPriceError'] = "PrbuyingPrice is required";
      }
      if(empty($productData['sellingPrice'])){
        $productData['sellingPriceError'] = "sellingPrice is required";
      }
      if(empty($productData['displayable'])){
        $productData['displayableError'] = "displayable is required";
      }

      if(empty($productData['nameError']) && empty($productData['buyingPriceError']) && empty($productData['sellingPriceError']) && empty($productData['displayableError'])){

        $data = [$productData['name'], $productData['buyingPrice'], $productData['sellingPrice'], $productData['displayable']];
         if($this->profileModel->addproduct($data)){
                $this->setFlash("productAdded", "Your product has been added successfuly");
                $this->redirect("profile/index");
         }

      } else {
        $this->view("addproduct", $productData);
      }

    }

    public function edit_product($id){
      $productEdit = $this->profileModel->edit_data($id);
      $data = [

        'data'    => $productEdit,
        'nameError' => '',
        'buyingPriceError'     => '',
        'sellingPriceError'     => '',
        'displayableError'   => ''

      ];
      $this->view("edit_product", $data);

    }

    public function updateproduct(){

      $id = $this->input('hiddenId');
      $productEdit = $this->profileModel->edit_data($id);
      $productData = [

        'name'           => $this->input('name'),
        'buyingPrice'          => $this->input('buyingPrice'),
        'sellingPrice'          => $this->input('sellingPrice'),
        'displayable'        => $this->input('displayable'),
        'data'           => $productEdit,
        'hiddenId'       => $this->input('hiddenId'),
        'nameError' => '',
        'buyingPriceError'     => '',
        'sellingPriceError'     => '',
        'displayableError'   => ''
        
 
       ];
 
       if(empty($productData['name'])){
        $productData['nameError'] = "Name is required";
      }
      if(empty($productData['buyingPrice'])){
        $productData['buyingPriceError'] = "PrbuyingPrice is required";
      }
      if(empty($productData['sellingPrice'])){
        $productData['sellingPriceError'] = "sellingPrice is required";
      }
      if(empty($productData['displayable'])){
        $productData['displayableError'] = "displayable is required";
      }

       if(empty($productData['nameError']) && empty($productData['buyingPriceError']) && empty($productData['sellingPriceError']) && empty($productData['displayableError'])){
       
        $updateData = [$productData['name'], $productData['buyingPrice'], $productData['sellingPrice'], $productData['displayable'], $productData['hiddenId']];

        if($this->profileModel->updateproduct($updateData)){

          $this->setFlash('productUpdated', 'Your product record has been updated successfully');
          $this->redirect("profile/index");

        }

       } else {
        $this->view("edit_product", $productData);
       }

    }

    public function delete($id){
      if($this->profileModel->deleteproduct($id)){
        $this->setFlash('deleted', 'Your product has been deleted successfully');
        $this->redirect('profile/index');
      }

    }


}


?>