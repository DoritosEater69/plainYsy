<?php           
                $selectedOption = $_GET['option_value'];     
//                $selectedOption = "news";
                    echo '<div id="#value" class="col-12 text-right" style="background-color:red; height:50px; color:black;">';
                    echo "Value:";
                    echo '<br>';
                    echo $selectedOption;
                    echo "</div>";
        
                if ($selectedOption == 'gallery'){
                    include ('includes/gallery.html');
                }
                
                if ($selectedOption == 'news'){
                    include ('includes/news.html');
                }
                                
                if ($selectedOption == 'social'){
                    include ('includes/social.html');
                }
                
                if ($selectedOption == 'carousel'){
                    include ('includes/carousel.html');
                }
                
?>