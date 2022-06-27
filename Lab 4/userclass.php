<?php

class User{
    
    //Need a property to store the json file name

    public $json_file;

    //Need a property to give me all stored_user form the file

    public $stored_data;

    //Need a property to know how many user stored in the file
    public $number_of_records;

    //Need a array to hold all user ids
    //Will use this property to autoincrement the user id

    public $ids=[];

    //Need an array that holds all the usernames
    //with this property i will validate the username
    public $usernames=[];

    //CONSTRUCTOR

    //this will all the properties with their value
    public function __construct($file_path)
    {
        //store the filepath in the $json_file property

        $this->$json_file = $file_path;

        // get the data from the JSOn file and store them in the $stored_data property
        $this->storeData=json_decode(file_get_contents($this->json_file),true);

        //set the number of users stored in the file in the $number_of_records property
        $this->number_of_records = count($this->storeData);

        //check the number_of_records property to see if there are any records in the file
        if ($this->number_of_records !=0) {

            //if there is any record in the file, i will loop through the $stored_data property
            foreach($this->storeData as $user){
                // add all the user ids, in the $ids array property
                array_push($this->ids,$user['id']);

                // add all the usernames in the $usernames property
                array_push($this->usernames,$user['username']);
            }
        }
    }

    // METHODS


    //create and increment the id field
    private function setUserId($user)
    {
       if ($this->number_of_records ==0) {
            $user['id']=1;
       }else{
            $user['id']=max($this->ids)+1;
       }
       return $user;
    }

    // this will store the new data, or edited data to the file
    private function storeData()
    {
        file_put_contents(
            $this->json_file,
            json_encode($this->stored_data,JSON_PRETTY_PRINT  |  JSON_UNESCAPED_UNICODE),LOCK_EX
        );
    }

    // method to insert  the new user
    public function insertNewUser($new_user){
        //add the id feild and it's value
        $user_with_id_field = $this->setUserId($new_user);

        //add the user to the $stored_data array property
        array_push($this->stored_data,$user_with_id_field);

        //username validation
        if ($this->number_of_records ==0) {
            // store the user without validating
            $this-> storeData();
        }else{
           //username validation: check if it's already used
           if (!in_array($new_user['username'],$this->usernames)) {
             //then store the user in the file
             $this->storeData();
           } 
        }
        echo $number_of_records;
        echo "Sakib";
    }


    //method to update the user
    public function updateUser($user_id,$field,$value)
    {
        # code...
    }

    //method to delete a user
    public function deleteUser($user_id)
    {
        # code...
    }

    //method to delete all user
    public function deleteAllUser()
    {
        # code...
    }

}



 /* End of user class*/



