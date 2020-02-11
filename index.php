<!DOCTYPE html>
<html>
    
    <head>
        <title>PHP Read-In</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>

    <body>
        <div id="outer-container">
            <div id="inner-container">
                <div id="info-container">
                    <h1 id="title">PHP</h1>
                    <h1>Text File Contents: </h1>
                    <ul>
                        <div id="li-container">
                    
                            <?php 
                            
                            // open the text file (read)
                            $text_file = fopen("sample.txt", "r") or die("unable to open file");

                            // scan the text file
                            while(!feof($text_file)) {

                                // read each line individually
                                $new_line = fgets($text_file);

                                // using Heredoc to display HTML elements
                                echo <<<EOS
                                    <li>$new_line</li>
                                EOS;
                            }

                            // close the text file
                            fclose($text_file);
                            ?>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>