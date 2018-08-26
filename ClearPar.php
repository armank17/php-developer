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
    class ClearPar
    {
        /**
        * @var string
        */
        public $result = '';
        
        /**
         * Get build
         *
         * @param string $param1 text input value 
         * @return string
         */
        public function build($param1 = '') {
            preg_match_all('#\(\)#', $param1, $matches, PREG_OFFSET_CAPTURE);

            if (count($matches[0]) > 0){
                foreach ($matches[0] as $val){
                    $this->result .= $val[0];
                } 
            }
            return $this->result;
        }
        
    }
    
    //Example
    $inputText = ')((()))())';
    
    $clearPar = new ClearPar();
    $resultData = $clearPar->build($inputText);
    echo $resultData;
?>
