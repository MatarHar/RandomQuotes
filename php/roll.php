<?php
            //loading topics
            $topics = file("adds/topics.txt",FILE_IGNORE_NEW_LINES);
            //Problem:
            //Warning: file_get_contents(https://www.brainyquote.com/topics/relationship ): failed to open stream: HTTP request failed! HTTP/1.1 404 
            //Solved by adding FILE_IGNORE_NEW_LINES as second parametr
            //130 topics in file
            $qRT = rand(0 , 129);
            //got all uppercase letters changed (in txt file)
            //to lowercase by keyboard shortcut
            //random quote
            //qpos_1_x (x=random number)
            //max 25 because we need 26 to cut into source properly
            //and we cant read 2_1 due to javascript
            $qRN = rand(1 , 25);
            //we explode the qpos with random number qRN

            //getting content
            //$url="https://www.brainyquote.com/topics/age"; XXXXXXXXXXXXXXXXXXXXXXXXXX used as test
            $url="https://www.brainyquote.com/topics/".$topics[$qRT];
            if(isset($url)){
            $_SESSION['info'][0] = '1';
            $lines_string=file_get_contents($url);
            //cutting out the quote from whole html file
            $qEQF = explode("qpos_1_".$qRN,$lines_string);
            //$qEQF = explode("qpos_1_8",$lines_string);    XXXXXXXXXXXXXXXXXXXXXXXXXX used as test
            $qEQS = explode('quote">',$qEQF[1]);
            $qEQT = explode('</a>',$qEQS[1]);
            $_SESSION['info'][1] = $qEQT[0];;
            //cutting out the author
            $qEAF = explode("qpos_1_8",$lines_string);
            $qEAS = explode('author">',$qEAF[1]);
            $qEAT = explode('</a>',$qEAS[1]);
            $_SESSION['info'][2] = $qEAT[0];
            }
            else{
            $_SESSION['info'][0] = '0';
            }
        ?>