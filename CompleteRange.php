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
    class CompleteRange
    {
        /**
        * @var string
        */
        private $error      = false;
        public  $result     = '';
        private $message    = 'Atención: números enteros positivos ordenados de '
                            . 'manera ascendente.  Ejemplo [4, 6, 7 ,10]';
        /**
         * Get build
         *
         * @param array $param1 text input value
         * @return array
         */
        public function build($param1 = array()) {
     
            if( count($param1) > 0 ){
                $n = 0;
                foreach($param1 as $num){
                    ( is_numeric($num) and ($num > $n) ) ? 
                    ( $n =  $num ) : 
                    ( $this->error = true );
                }
            }
            if( $this->error ){
                $this->result = utf8_encode($this->message);
            }else{
                $first         = $param1[0];
                $last          = end($param1);
                $collection    = array();
                
                for($i = $first; $i <= $last; $i++){
                    $collection[] = $i;
                }
                $this->result = $collection;
            }
            return $this->result;
        }
        
    }
    
    //example
    $inputArray = array(5, 35, 39, 46);
    
    $completeRange = new CompleteRange($inputArray);
    $result = $completeRange->build();

    echo '<pre>';
    print_r($result);
    echo '</pre>';
?>
