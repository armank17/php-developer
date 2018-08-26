<?php

    /**
    * Short description for class
    *
    * Long description for class (if any)...
    *
    * @category   CategoryName
    * @author     Original Author <author@example.com>
    * @version    Release: @package_version@
    * @link       http://pear.php.net/package/PackageName
    */
    class ChangeString
    {
        /**
        * @var string
        */
        public $result = '';
        
        /**
         * Get build
         *
         * @param array $param1 text input value
         * @return string
         */
        public function build($param1 = '') {
           
            if($param1 != ''){
                $arr = str_split($param1);
                foreach($arr as $l){
                    if(ctype_alpha($l)){
                        ($l === 'n') ? 
                        ($l = 'ñ') : 
                        ( 
                            ($l === 'N') ? 
                            ($l = 'Ñ') : 
                            ($l++) 
                        ); 
                    }else{
                        $l = ($l === 'ñ') ? 
                             ($l = 'o') : 
                             (
                                ($l === 'Ñ') ?
                                ($l = 'O') :
                                ($l)
                            );  
                    }
                    $this->result .= $l[0];
                }
                $this->result = utf8_encode($this->result);
            }
            return $this->result;
        }
    }
    
    //example
    $inputText = '**Casa 52Z';
    
    $changeString = new ChangeString();
    $result = $changeString->build($inputText);
    echo $result;
?>
