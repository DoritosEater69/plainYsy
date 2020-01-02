<?php
    $selectedOption = $_POST['option_value'];                    
        echo "value = $selectedOption";
        
        if ($selectedOption == 'gallery'){
            include ('includes/gallery.html');
        }

?>