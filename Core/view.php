<?php
    class view
    {
        public function render($viewPath, $layout = NULL)
        {

            if ($layout === NULL) {
                $this->view = $viewPath;
                require('Vista/layout.php');
            }
            else if ($layout === FALSE) {
                require('Vista/' . $viewPath . '.php');
            }
            else {
                $this->view = $viewPath;
                require("Vista/$layout.php");
            }
        }
    }