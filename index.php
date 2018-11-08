<!--
 Random Quotes
 Piotr Tryfon
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RandomQuotes</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main_container">
        <?php
            $url='https://www.brainyquote.com/search_results?q=funny';
            //file_get_contents() reads remote webpage content
            $lines_string=file_get_contents($url);
            //output, you can also save it locally on the server
            // string do rozdzieleniasadsad
            // wykorzystanie funkcji explode, wg przecinka
            $data_quote_before = explode('<a href="/quotes/elbert_hubbard_104409" class="b-qt qt_104409 oncl_q" title="view quote">',$lines_string);
            // wyświetlenie otrzymanej tablicy
            $data_author = explode('<a href="/authors/elbert_hubbard" class="bq-aut qa_104409 oncl_a" title="view author">',$lines_string);
            //echo $data_quote[1]."<br/>";
            //echo $data_quote_before[1]."<br/>";
            $data_quote_after = explode('<a href="/authors/elbert_hubbard" class="bq-aut qa_104409 oncl_a" title="view author">Elbert Hubbard</a>',$lines_string);
            $final =  str_replace('<a href="/authors/elbert_hubbard" class="bq-aut qa_104409 oncl_a" title="view author">Elbert Hubbard</a>',"",$data_quote_after[1]);
            echo str_replace($final,"",$data_quote_before[1]);
            
        ?>
    </div>
</body>
</html>