<?php

    class User {

        public function getUser($id)
        {
            $modelo = cargarModelo('User');
            $modelo->getUser($id);
        }

        public function age()
        {
            return 32;
        }

        /*
         * Método para
         * 
         * @author Fides Escalona
         * return void
         */
        public function foo()
        {
        
        }

        /*
         * Método para obtener el status
         * 
         * @author Fides Escalona
         * return void
         */
        public function getStatus()
        {
            return 'status';
        }

        
    }