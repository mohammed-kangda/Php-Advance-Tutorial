<!-- 

    if/else statement is used to check single lines of code only
    
    If we want to check multiple lines of code then try/catch statement is used

    Inbuilt Function of catch

    getMessage() -> show error msg
    getLine() -> show exact line no. of error
    getCode() -> shows from where code starts
    getFile() -> shows from which file erroris comming

    Exception stops code from running further

    # SYNTAX: 


    try{
       # code
    }catch(){
       # when any error comes in 'try' then comes here
       many inbuilt function avaialble to show error msg
       error readabily increases
    }finally{
        # works every time
    }

    try{
        if(condition){

        }else{
            throw new Exception("Some Msg Goes Here");
        }
    }catch(Exception $e){
       echo $e->getMessage();
    }

-->

<?php 
    
    // # using if/else

    // $n = 5;
    
    // if($n > 0){
    //     $div = 10/$n;
    //     echo $div . "<br>";
    // }else{
    //     echo "Enter Valid Number";
    // }
    

    // # using exception handling

    // $num = 0;

    // try{

    //     if($num == 0){
    //        throw new Exception("Enter The Valid Number<br>"); # stops code & return to catch
    //     } 

    //     $division = 10/$num;
    //     echo $division . "<br>";    

    // }catch(Exception $e){
    //     echo $e->getMessage();
    // }finally{
    //     echo "Completed";
    // }


    # creating our ownException Class
    
    class myException extends Exception{
        public function errorMessage(){
            $error = "Exception Message : " . $this->getMessage() .
                     "<br> Error on Line No : " . $this->getLine();
            return $error;
        }
    }

    

    function divid($number){
        try {

            if($number == 0){
                throw new Exception("Enter The Valid Number<br>"); # stops code & return to catch
            } 
    
            if($number == 5){
                throw new myException("<br>Number Is 5<br>"); # stops code & return to catch
            }
     
            $divide = 10/$number;
            echo $divide . "<br>";
    
        } catch (Exception $th) {
            echo $th->getMessage();
        } catch (myException $e) {
            echo $e->errorMessage();
        } finally {
           echo "Task Completed<br>";
        }
    }

    divid(0);
    divid(5);
    divid(10);
    
?>