<?php
    namespace edj\mvcframecore;

    class Request
    {
        # code...
        public function getPath(){

            $path = $_SERVER['REQUEST_URI'] ?? '/' ;
            $position = strpos($path , '?');
            if($position === false){
                return $path;
                
            }

           return substr($path,0,$position);

        }

        //get method function

        public function method(){

            return strtolower($_SERVER['REQUEST_METHOD']);

        }

        // is get
        public function isGet(){

            return $this->method() === 'get';

        }
        //if is post
        public function isPost(){

            return $this->method() === 'post';

        }

        //GetBody

        public function getBody()
        {
            # code...

            $body = [];
            if ($this->method() === 'get') {
                foreach ($_GET as $key => $value) {
                    $body[$key] = filter_input(INPUT_GET , $key , FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
            if ($this->method() === 'post') {
                foreach ($_POST as $key => $value) {
                    $body[$key] = filter_input(INPUT_POST , $key , FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }


            return $body;
        }
    }   
    






?>